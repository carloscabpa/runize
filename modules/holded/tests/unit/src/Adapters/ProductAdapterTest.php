<?php

declare(strict_types=1);

namespace Holded\Prestashop\Test\Unit\Adapters;

use Holded\Prestashop\Adapters\ProductAdapter;
use Holded\SDK\DTOs\Product\Product;
use Mockery as m;
use PHPUnit\Framework\TestCase;

class ProductAdapterTest extends TestCase
{
    public function test_create_dto_without_variants(): void
    {
        define('_DB_PREFIX_', 'something');
        define('_PS_BASE_URL_', 'something');

        /** @var m\MockInterface $db */
        $db = m::mock('overload:\Db');
        $db->shouldReceive('getInstance')->andReturn($db);
        $db->shouldReceive('getValue')->andReturns(0, 2);

        /** @var m\MockInterface $configuration */
        $configuration = m::mock('overload:\Configuration');
        $configuration->shouldReceive('get')->andReturns('es', 1, 2, 2);

        /** @var m\MockInterface $taxRulesTaxManager */
        $taxRulesTaxManager = m::mock('overload:\TaxRulesTaxManager');
        $taxRulesTaxManager->shouldReceive('getTaxCalculator')->andReturn(new \TaxCalculator());

        /** @var m\MockInterface $taxManagerFactory */
        $taxManagerFactory = m::mock('overload:\TaxManagerFactory');
        $taxManagerFactory->shouldReceive('getManager')->andReturn($taxRulesTaxManager);

        $tools = m::mock('overload:\Tools');
        $tools->shouldReceive('strlen')->andReturns(1);

        /** @var \Product|\Mockery\LegacyMockInterface $pProduct */
        $pProduct = m::mock('overload:\Product');
        $pProduct->shouldReceive('hasAttributes')->andReturns(false);
        $pProduct->shouldReceive('getCover')->andReturns(false);
        $pProduct->id = 1;
        $pProduct->id_tax_rules_group = 1;
        $pProduct->name = 'test';
        $pProduct->description = 'description';
        $pProduct->price = 1;
        $pProduct->wholesale_price = 2;
        $pProduct->ean13 = '1';
        $pProduct->reference = 'reference';
        $pProduct->weight = 2;
        $pProduct->id_shop_default = 2;

        self::assertInstanceOf(Product::class, ProductAdapter::fromPrestashopToDTO($pProduct));
    }

    public function test_create_dto_with_variants(): void
    {
        define('_DB_PREFIX_', 'something');
        define('_PS_BASE_URL_', 'something');

        /** @var m\MockInterface $db */
        $db = m::mock('overload:\Db');
        $db->shouldReceive('getInstance')->andReturn($db);
        $db->shouldReceive('getValue')->andReturns(0, 2);

        /** @var m\MockInterface $configuration */
        $configuration = m::mock('overload:\Configuration');
        $configuration->shouldReceive('get')->andReturns('es', 1, 2, 2);

        /** @var m\MockInterface $taxRulesTaxManager */
        $taxRulesTaxManager = m::mock('overload:\TaxRulesTaxManager');
        $taxRulesTaxManager->shouldReceive('getTaxCalculator')->andReturn(new \TaxCalculator());

        /** @var m\MockInterface $taxManagerFactory */
        $taxManagerFactory = m::mock('overload:\TaxManagerFactory');
        $taxManagerFactory->shouldReceive('getManager')->andReturn($taxRulesTaxManager);

        $tools = m::mock('overload:\Tools');
        $tools->shouldReceive('strlen')->andReturn(0);

        /** @var \Product|\Mockery\LegacyMockInterface $pProduct */
        $pProduct = m::mock('overload:\Product');
        $pProduct->id = 1;
        $pProduct->id_tax_rules_group = 1;
        $pProduct->name = 'test';
        $pProduct->description = 'description';
        $pProduct->price = 1;
        $pProduct->wholesale_price = 2;
        $pProduct->ean13 = '1';
        $pProduct->reference = 'reference';
        $pProduct->weight = 2;
        $pProduct->id_shop_default = 2;
        $pProduct->shouldReceive('hasAttributes')->andReturn(true);
        $pProduct->shouldReceive('getCover')->andReturns(false);
        $pProduct->shouldReceive('getAttributeCombinations')->andReturn([
            [
                'ean13'                => 1,
                'reference'            => 1,
                'id_product_attribute' => 1,
                'price'                => 1,
                'wholesale_price'      => 1,
                'quantity'             => 1,
            ],
        ]);
        $pProduct->shouldReceive('getAttributeCombinationsById')->andReturn([[
            'id_attribute_group' => '1',
            'group_name'         => 'name',
            'id_attribute'       => '1',
            'attribute_name'     => 'att',
        ]]);

        self::assertInstanceOf(Product::class, ProductAdapter::fromPrestashopToDTO($pProduct));
    }
}
