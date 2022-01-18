<?php

declare(strict_types=1);

namespace Holded\Prestashop\Test\Unit\Controllers;

use Holded\Prestashop\Controllers\ExportProductsController;
use Holded\SDK\DTOs\Product\Product;
use Holded\SDK\DTOs\Product\Variation;
use Mockery as m;
use PHPUnit\Framework\TestCase;

class ExportProductsControllerTest extends TestCase
{
    public function test_it_export_products(): void
    {
        /** @var m\MockInterface $tools */
        $tools = m::mock('overload:\Tools');
        $tools->shouldReceive('getValue')->andReturns('gretgvf21e3d2ec2', 1, 10);

        /** @var m\MockInterface $configuration */
        $configuration = m::mock('overload:\Configuration');
        $configuration->shouldReceive('get')->andReturns('gretgvf21e3d2ec2');

        /** @var m\MockInterface $product */
        $product = m::mock('overload:\Product');
        $product->shouldReceive('getProducts')->andReturns([
            ['id_product' => 1],
            ['id_product' => 2],
            ['id_product' => 3],
        ]);

        $language = new \stdClass();
        $language->id = 'es';
        $context = new \stdClass();
        $context->language = $language;

        $controller = new class($context) extends ExportProductsController {
            /** @var mixed */
            public $context;

            /**
             * @param mixed $context
             */
            public function __construct($context)
            {
                $this->context = $context;
            }

            protected function die(array $json = []): void
            {
                throw new \Exception();
            }
        };

        $this->mockAdapter();

        try {
            $controller->initContent();
        } catch (\Exception $e) {
        }

        self::assertEquals(200, http_response_code());
    }

    public function mockAdapter(): void
    {
        $product1 = new Product();
        $product1->kind = 'simple';
        $product1->sku = '';

        $product2 = new Product();
        $product2->kind = 'simple';
        $product2->sku = '123';

        $variant1 = new Variation();
        $variant1->sku = '123';
        $product3 = new Product();
        $product3->kind = 'variants';
        $product3->sku = '123';
        $product3->variants = [$variant1];

        $variant2 = new Variation();
        $variant2->sku = '';
        $product4 = new Product();
        $product4->kind = 'variants';
        $product4->sku = '123';
        $product4->variants = [$variant2];

        /** @var m\MockInterface $adapter */
        $adapter = m::mock('overload:\Holded\Prestashop\Adapters\ProductAdapter');
        $adapter->shouldReceive('fromPrestashopToDTO')->andReturn($product1, $product2, $product3, $product4);
    }
}
