<?php

declare(strict_types=1);

namespace Holded\Prestashop\Controllers;

use Holded\Prestashop\Adapters\ProductAdapter;
use Tools;

class ExportProductsController extends \ModuleFrontController
{
    private const LIMIT = 10;

    public function initContent(): void
    {
        $apiKey = Tools::getValue('api-key');
        if (empty(\Configuration::get('holdedkey')) || empty($apiKey) || $apiKey != \Configuration::get('holdedkey')) {
            http_response_code(401);

            $this->die();
        }

        try {
            $page = Tools::getValue('page');
            $limit = Tools::getValue('limit');

            if (!is_numeric($page) || $page < 0 || ($limit !== false && (!is_numeric($limit) || $limit < 0))) {
                throw new \InvalidArgumentException('The parameters page and limit are required.');
            }

            $limit = $limit ?? self::LIMIT;
            $products = \Product::getProducts($this->context->language->id, ($page - 1) * $limit, $limit, 'name', 'ASC');

            $products = array_map(function ($product) {
                return ProductAdapter::fromPrestashopToDTO(new \Product($product['id_product'], true));
            }, $products);

            $isLastPage = count($products) < $limit;

            $filteredProducts = [];
            foreach ($products as $product) {
                if ($product->kind === 'simple' && empty($product->sku)) {
                    continue;
                }
                if ($product->kind === 'variants') {
                    $product->removeVariantsWithoutSku();

                    if (!$product->hasVariants()) {
                        continue;
                    }
                }

                $filteredProducts[] = $product;
            }

            $json = ['data' => ['status' => true, 'products' => $filteredProducts, 'isLastPage' => $isLastPage]];
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
}
