<?php

declare(strict_types=1);

namespace Holded\Prestashop\Adapters;

use Holded\SDK\DTOs\Product\Option;
use Holded\SDK\DTOs\Product\Product;
use Holded\SDK\DTOs\Product\Variation;
use Holded\SDK\DTOs\Tax\Tax;

final class ProductAdapter
{
    private const PROVIDER = 'prestashop';

    public static function fromPrestashopToDTO(\Product $prestashopProduct, int $variantId = null): Product
    {
        $tax_manager = \TaxManagerFactory::getManager(\Address::initialize(), $prestashopProduct->id_tax_rules_group);
        $tax_calculator = $tax_manager->getTaxCalculator();

        $taxes = [];
        if ($tax_calculator->taxes) {
            $taxesIds = array_column($tax_calculator->taxes, 'id');
            $rawTaxes = \Db::getInstance()->executeS('
                SELECT *
                FROM '._DB_PREFIX_.'tax_rule tr
                INNER JOIN '._DB_PREFIX_.'tax t ON t.id_tax = tr.id_tax
                INNER JOIN '._DB_PREFIX_.'tax_lang tl ON tl.id_tax = tr.id_tax
                INNER JOIN '._DB_PREFIX_.'country c ON c.id_country = tr.id_country
                AND tr.id_tax_rules_group = '.$prestashopProduct->id_tax_rules_group.'
                WHERE t.active = 1
                AND t.deleted = 0 
                AND t.id_tax IN ('.implode(',', $taxesIds).')
                AND tr.id_country = '.\Configuration::get('PS_COUNTRY_DEFAULT'));

            foreach ($rawTaxes as $rawTax) {
                $tax = new Tax();
                $tax->type = Tax::TYPE_PERCENTAGE;
                $tax->name = $rawTax['name'];
                $tax->country = $rawTax['iso_code'];
                $tax->rate = $rawTax['rate'];
                $tax->origin = [
                    'provider'   => self::PROVIDER,
                    'providerId' => (new \Shop($prestashopProduct->id_shop_default))->getBaseURL(true),
                    'originType' => 'tax',
                    'originId'   => $rawTax['id_tax'],
                ];

                $taxes[] = $tax;

                // Only send one tax
                break;
            }
        }

        $langId = \Configuration::get('PS_LANG_DEFAULT');
        if (\Configuration::get('HOLDED_LANG_DEFAULT')) {
            $langId = \Configuration::get('HOLDED_LANG_DEFAULT');
        }

        $product = new Product();
        $product->kind = 'simple';
        $product->provider = self::PROVIDER;
        $product->shopUrl = (new \Shop($prestashopProduct->id_shop_default))->getBaseURL(true);
        $product->name = $prestashopProduct->name[$langId];
        $product->description = strip_tags($prestashopProduct->description[$langId]);
        $product->taxes = $taxes;
        $product->price = $prestashopProduct->price;
        $product->cost = (float) $prestashopProduct->wholesale_price;
        $product->barcode = $prestashopProduct->ean13;
        $product->sku = $prestashopProduct->reference;
        $product->weight = $prestashopProduct->weight;
        $product->forSale = true;
        $product->forPurchase = true;

        $stockAvailable = new \StockAvailable(\StockAvailable::getStockAvailableIdByProductId($prestashopProduct->id));
        $product->stock = $stockAvailable->quantity;

        if ($prestashopProduct->hasAttributes()) {
            $product->kind = 'variants';

            $rawVariants = array_map(function (array $attributeCombination) use ($prestashopProduct, $langId, $variantId) {
                if ($variantId !== null && ((int) $attributeCombination['id_product_attribute']) !== $variantId) {
                    return null;
                }

                $variation = new Variation();
                $variation->barcode = $attributeCombination['ean13'];
                $variation->sku = $attributeCombination['reference'];
                $variation->price = (string) ((float) $prestashopProduct->price + (float) $attributeCombination['price']);
                $variation->cost = $attributeCombination['wholesale_price'];
                $variation->stock = $attributeCombination['quantity'];

                $stockAvailable = new \StockAvailable(\StockAvailable::getStockAvailableIdByProductId(
                    $prestashopProduct->id,
                    $attributeCombination['id_product_attribute']
                ));
                $variation->stock = $stockAvailable->quantity;

                $attributeCombinationFromDb = $prestashopProduct->getAttributeCombinationsById(
                    $attributeCombination['id_product_attribute'],
                    $langId,
                    true
                );

                $variation->options = [];
                foreach ($attributeCombinationFromDb as $attribute) {
                    $option = new Option();
                    $option->parentId = $attribute['id_attribute_group'];
                    $option->parentName = $attribute['group_name'];
                    $option->id = $attribute['id_attribute'];
                    $option->value = $attribute['attribute_name'];

                    $variation->options[] = $option;
                }

                return $variation;
            }, $prestashopProduct->getAttributeCombinations($langId, false));

            // Remove duplicated variants with same SKU
            $variants = [];
            foreach ($rawVariants as $variant) {
                if (is_null($variant)) {
                    continue;
                }

                if (isset($variants[$variant->sku])) {
                    continue;
                }

                $variants[$variant->sku] = $variant;
            }

            $product->variants = array_values($variants);
        }

        $product->origin = [
            'provider'   => self::PROVIDER,
            'providerId' => (new \Shop($prestashopProduct->id_shop_default))->getBaseURL(true),
            'originType' => $product->kind,
            'originId'   => $prestashopProduct->id,
        ];

        $product->options = [];
        if (!empty($product->variants)) {
            $allOptions = array_map(function (Variation $variant) {
                return $variant->options;
            }, $product->variants);

            $product->options = array_merge(...$allOptions);
        }

        $image = $prestashopProduct->getCover($prestashopProduct->id);
        if ($image) {
            $link = new \Link();
            $imageUrl = $link->getImageLink(isset($prestashopProduct->link_rewrite) ? $prestashopProduct->link_rewrite[$langId] : $prestashopProduct->name[$langId], $image['id_image'], 'home_default');

            $product->imageUrl = (\Configuration::get('PS_SSL_ENABLED') ? 'https://' : 'http://').$imageUrl;
        } else {
            $product->imageUrl = null;
        }

        return $product;
    }
}
