<?php

declare(strict_types=1);

namespace Holded\Prestashop\Test\Unit\Controllers;

use Holded\Prestashop\Controllers\UpdateStockController;
use Mockery as m;
use phpmock\MockBuilder;
use PHPUnit\Framework\TestCase;

class UpdateStockControllerTest extends TestCase
{
    public function test_api_key_is_not_send(): void
    {
        /** @var m\MockInterface $tools */
        $tools = m::mock('overload:\Tools');
        $tools->shouldReceive('getValue')->andReturns('');

        /** @var m\MockInterface $configuration */
        $configuration = m::mock('overload:\Configuration');
        $configuration->shouldReceive('get')->andReturns('gretgvf21e3d2ec2');

        $controller = new class() extends UpdateStockController {
            protected function die(array $json = []): void
            {
                throw new \Exception();
            }
        };

        try {
            $controller->initContent();
        } catch (\Exception $e) {
        }

        self::assertEquals(401, http_response_code());
    }

    public function test_sku_is_not_send(): void
    {
        /** @var m\MockInterface $tools */
        $tools = m::mock('overload:\Tools');
        $tools->shouldReceive('getValue')->andReturns('gretgvf21e3d2ec2', '');

        /** @var m\MockInterface $configuration */
        $configuration = m::mock('overload:\Configuration');
        $configuration->shouldReceive('get')->andReturns('gretgvf21e3d2ec2');

        $controller = new class() extends UpdateStockController {
            protected function die(array $json = []): void
            {
                throw new \Exception();
            }
        };

        try {
            $controller->initContent();
        } catch (\Exception $e) {
        }

        self::assertEquals(400, http_response_code());
    }

    public function test_it_update_stock(): void
    {
        define('_PS_USE_SQL_SLAVE_', '');

        /** @var m\MockInterface $tools */
        $tools = m::mock('overload:\Tools');
        $tools->shouldReceive('getValue')->andReturns('gretgvf21e3d2ec2', '1', 1);

        /** @var m\MockInterface $configuration */
        $configuration = m::mock('overload:\Configuration');
        $configuration->shouldReceive('get')->andReturns('gretgvf21e3d2ec2');

        /** @var m\MockInterface $validate */
        $validate = m::mock('overload:\Validate');
        $validate->shouldReceive('isReference')->andReturns(true);

        /** @var m\MockInterface $adapter */
        $adapter = m::mock('overload:\ProductAdapter');
        $adapter->shouldReceive('skuFromHoldedToPrestashop')->andReturn([
            'reference'            => 1,
            'id_product_attribute' => 1,
        ]);

        /** @var m\MockInterface $db */
        $db = m::mock('overload:\Db');
        $db->shouldReceive('getInstance')->andReturns($db);
        $db->shouldReceive('getValue')->andReturns(1);

        /** @var m\MockInterface $query */
        $query = m::mock('overload:\DbQuery');
        $query->shouldReceive('select')->andReturns($db);
        $query->shouldReceive('from')->andReturns($db);
        $query->shouldReceive('where')->andReturns($db);

        /** @var m\MockInterface $product */
        $product = m::mock('overload:\Product');
        $product->shouldReceive('save')->andReturns(true);

        $this->mockFunction('pSQL', function ($a) {});

        $controller = new class() extends UpdateStockController {
            protected function die(array $json = []): void
            {
            }
        };
        $controller->initContent();

        self::assertEquals(200, http_response_code());
    }

    private function mockFunction(
        string $name,
        callable $function
    ): void {
        $class = new \ReflectionClass(get_class($this));
        $namespace = str_replace("\Test\Unit", '', $class->getNamespaceName());

        $builder = new MockBuilder();
        $builder
            ->setNamespace($namespace)
            ->setName($name)
            ->setFunction($function)
            ->build()
            ->enable();
    }
}
