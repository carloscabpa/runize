<?php

declare(strict_types=1);

namespace Holded\Prestashop\Controllers;

use Holded\SDK\Loggers\ProductLogger;
use Tools;

class UpdateStockController extends \ModuleFrontController
{
    public function initContent(): void
    {
        $apiKey = Tools::getValue('api-key');
        if (empty(\Configuration::get('holdedkey')) || empty($apiKey) || $apiKey != \Configuration::get('holdedkey')) {
            http_response_code(401);

            $this->die();
        }

        try {
            $this->setProductsStock();
            $json = ['data' => ['status' => true]];
            $httpCode = 200;
        } catch (\InvalidArgumentException $e) {
            $json = ['errors' => ['error' => $e->getMessage()]];
            $httpCode = 400;
        } catch (\Exception $e) {
            $json = ['errors' => ['error' => $e->getMessage()]];
            $httpCode = 500;
        }

        http_response_code($httpCode);

        $this->die($json);
    }

    /**
     * @param mixed[] $json
     */
    protected function die(array $json = []): void
    {
        if (empty($json)) {
            exit();
        }

        exit(json_encode($json));
    }

    private function setProductsStock(): void
    {
        $sku = Tools::getValue('sku');
        $quantity = Tools::getValue('quantity');

        if (empty($sku) || !is_numeric($quantity)) {
            throw new \InvalidArgumentException('The parameters sku and quantity are required.');
        }
        $quantity = (int) $quantity;

        $productId = $this->getIdProductByReference($sku);
        if ($productId) {
            (ProductLogger::getLogger())->setLastUpdatedProductSku($sku ?? '');
            \StockAvailable::setQuantity($productId, null, $quantity);

            return;
        }

        $attributeId = null;
        $productId = $this->getIdProductAttributeByReference($sku);
        $product = new \Product($productId);
        $langId = \Context::getContext()->language->id;
        $combinations = $product->getAttributeCombinations((int) $langId, true);
        foreach ($combinations as $combination) {
            if ($combination['reference'] == $sku) {
                $attributeId = $combination['id_product_attribute'];
            }
        }

        if ($productId && $attributeId) {
            (ProductLogger::getLogger())->setLastUpdatedProductSku($sku ?? '');
            \StockAvailable::setQuantity($productId, $attributeId, $quantity);

            return;
        }
    }

    /**
     * @param mixed $reference
     *
     * @return mixed
     */
    private function getIdProductByReference($reference)
    {
        if (empty($reference)) {
            return 0;
        }

        if (!\Validate::isReference($reference)) {
            return 0;
        }

        $query = new \DbQuery();
        $query->select('p.id_product');
        $query->from('product', 'p');
        $query->where('p.reference = \''.pSQL($reference).'\'');

        return \Db::getInstance(_PS_USE_SQL_SLAVE_)->getValue($query);
    }

    /**
     * @param mixed $reference
     *
     * @return mixed
     */
    private function getIdProductAttributeByReference($reference)
    {
        if (empty($reference)) {
            return 0;
        }

        if (!\Validate::isReference($reference)) {
            return 0;
        }

        $query = new \DbQuery();
        $query->select('pa.id_product');
        $query->from('product_attribute', 'pa');
        $query->where('pa.reference = \''.pSQL($reference).'\'');

        return \Db::getInstance(_PS_USE_SQL_SLAVE_)->getValue($query);
    }
}
