<?php

declare(strict_types=1);

namespace Holded\Prestashop\Services;

use Holded\Prestashop\Adapters\ProductAdapter;
use Holded\SDK\Loggers\ProductLogger;

class ProductService extends AbstractService
{
    public function updateAllProducts(): bool
    {
        $shopId = \Configuration::get('PS_SHOP_DEFAULT');
        if (\Configuration::get('HOLDED_SHOP_DEFAULT')) {
            $shopId = \Configuration::get('HOLDED_SHOP_DEFAULT');
        }

        $products = \Db::getInstance()->executeS('
            SELECT id_product
            FROM '._DB_PREFIX_.'product_shop
            WHERE id_shop = '.$shopId.' AND active = 1');

        if ($products && is_array($products)) {
            foreach ($products as $product) {
                $this->updateHoldedProduct((int) $product['id_product']);
            }
        }

        return true;
    }

    public function updateHoldedProduct(int $productId): bool
    {
        $updated = false;

        $PProduct = new \Product($productId);
        try {
            $product = ProductAdapter::fromPrestashopToDTO($PProduct);

            if ($product->kind === 'simple' && empty($product->sku)) {
                return false;
            }

            if ((ProductLogger::getLogger())->getLastUpdatedProductSku() === $product->sku) {
                return false;
            }

            if ($product->kind === 'variants') {
                $product->removeVariantsWithoutSku();

                if (!$product->hasVariants()) {
                    return false;
                }

                foreach ($product->variants ?? [] as $variant) {
                    if ((ProductLogger::getLogger())->getLastUpdatedProductSku() === $variant->sku) {
                        return false;
                    }
                }
            }

            $updated = $this->holdedSDK->updateProduct($product);
        } catch (\Exception $e) {
        }

        return $updated;
    }

    public function deleteHoldedProduct(int $productId): bool
    {
        $deleted = false;

        $PProduct = new \Product($productId);
        try {
            $product = ProductAdapter::fromPrestashopToDTO($PProduct);

            $deleted = $this->holdedSDK->deleteProduct($product);
        } catch (\Exception $e) {
        }

        return $deleted;
    }

    public function updateHoldedProductStock(int $productId, int $variantId = null): bool
    {
        $PProduct = new \Product($productId);
        $product = ProductAdapter::fromPrestashopToDTO($PProduct, $variantId);

        if ((ProductLogger::getLogger())->getLastUpdatedProductSku() === $product->sku) {
            return false;
        }

        if ($variantId === 0 && $product->kind === 'variants') {
            return false;
        }

        return $this->holdedSDK->updateProductStock($product);
    }
}
