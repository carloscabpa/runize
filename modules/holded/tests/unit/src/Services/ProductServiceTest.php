<?php

declare(strict_types=1);

namespace Holded\Prestashop\Test\Unit\Services;

use Holded\Prestashop\Services\ProductService;
use Holded\SDK\DTOs\Product\Product;
use Holded\SDK\Holded;
use Mockery as m;
use PHPUnit\Framework\TestCase;

class ProductServiceTest extends TestCase
{
    public function test_it_update_product_but_throw_exception(): void
    {
        $product = $this->createMock(Product::class);
        $client = $this->createMock(Holded::class);
        $client->method('updateProduct')->willThrowException(new \Exception());

        m::mock('overload:\Product');

        /** @var m\MockInterface $adapter */
        $adapter = m::mock('overload:\Holded\Prestashop\Adapters\ProductAdapter');
        $adapter->shouldReceive('fromPrestashopToDTO')->andReturn($product);

        $service = new ProductService($client);
        $result = $service->updateHoldedProduct(1);

        self::assertFalse($result);
    }

    public function test_it_update_product(): void
    {
        $product = $this->createMock(Product::class);
        $product->sku = '123';
        $product->kind = 'simple';

        $client = $this->createMock(Holded::class);
        $client->method('updateProduct')->willReturn(true);

        m::mock('overload:\Product');

        /** @var m\MockInterface $adapter */
        $adapter = m::mock('overload:\Holded\Prestashop\Adapters\ProductAdapter');
        $adapter->shouldReceive('fromPrestashopToDTO')->andReturn($product);

        $service = new ProductService($client);
        $result = $service->updateHoldedProduct(1);

        self::assertTrue($result);
    }

    public function test_it_create_product(): void
    {
        $product = $this->createMock(Product::class);
        $product->sku = '123';
        $product->kind = 'simple';

        $client = $this->createMock(Holded::class);
        $client->method('updateProduct')->willReturn(true);

        $pProduct = m::mock('overload:\Product');
        $pProduct->id = 1;

        /** @var m\MockInterface $adapter */
        $adapter = m::mock('overload:\Holded\Prestashop\Adapters\ProductAdapter');
        $adapter->shouldReceive('fromPrestashopToDTO')->andReturn($product);

        $service = new ProductService($client);
        $result = $service->updateHoldedProduct(1);

        self::assertTrue($result);
    }

    public function test_it_update_all_products_but_not_there_are(): void
    {
        define('_DB_PREFIX_', 'something');

        $client = $this->createMock(Holded::class);

        /** @var m\MockInterface $configuration */
        $configuration = m::mock('overload:\Configuration');
        $configuration->shouldReceive('get')->andReturn(1);

        /** @var m\MockInterface $db */
        $db = m::mock('overload:\Db');
        $db->shouldReceive('getInstance')->andReturn($db);
        $db->shouldReceive('executeS')->andReturn([]);

        $service = new ProductService($client);
        $result = $service->updateAllProducts();

        self::assertTrue($result);
    }

    public function test_it_update_all_products(): void
    {
        define('_DB_PREFIX_', 'something');

        $client = $this->createMock(Holded::class);
        $client->method('updateProduct')->willReturn(true);

        $pProduct = m::mock('overload:\Product');
        $pProduct->id = 1;

        /** @var m\MockInterface $configuration */
        $configuration = m::mock('overload:\Configuration');
        $configuration->shouldReceive('get')->andReturn(1);

        /** @var m\MockInterface $db */
        $db = m::mock('overload:\Db');
        $db->shouldReceive('getInstance')->andReturn($db);
        $db->shouldReceive('executeS')->andReturn([['id_product' => 1]]);

        /** @var m\MockInterface $taxRulesTaxManager */
        $taxRulesTaxManager = m::mock('overload:\TaxRulesTaxManager');

        /** @var m\MockInterface $taxManagerFactory */
        $taxManagerFactory = m::mock('overload:\TaxManagerFactory');
        $taxManagerFactory->shouldReceive('getManager')->andReturn($taxRulesTaxManager);

        $service = new ProductService($client);
        $result = $service->updateAllProducts();

        self::assertTrue($result);
    }
}
