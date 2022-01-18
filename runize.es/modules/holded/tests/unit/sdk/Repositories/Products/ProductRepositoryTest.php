<?php

declare(strict_types=1);

namespace Holded\SDK\Tests\Unit\Repositories\Products;

use Holded\SDK\DTOs\Product\Product;
use Holded\SDK\Repositories\Products\ProductRepository;
use Holded\SDK\Services\HTTP\Client;
use PHPUnit\Framework\TestCase;

class ProductRepositoryTest extends TestCase
{
    public function test_product_is_updated(): void
    {
        $client = $this->createMock(Client::class);
        $client->method('call')->willReturn(['status' => 1, 'id' => '5f6b62d2e6dbf00abd050000']);

        self::assertTrue((new ProductRepository($client))->update(new Product()));
    }

    public function test_product_is_not_updated(): void
    {
        $client = $this->createMock(Client::class);
        $client->method('call')->willReturn(['status' => 0, 'info' => 'Not updated']);

        self::assertFalse((new ProductRepository($client))->update(new Product()));
    }
}
