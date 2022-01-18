<?php

declare(strict_types=1);

namespace Holded\SDK\Tests\Unit\Repositories\Orders;

use Holded\SDK\DTOs\Order\Order;
use Holded\SDK\Repositories\Orders\OrderRepository;
use Holded\SDK\Services\HTTP\Client;
use PHPUnit\Framework\TestCase;

class OrderRepositoryTest extends TestCase
{
    public function test_order_is_created(): void
    {
        $client = $this->createMock(Client::class);
        $client->method('get')->willReturn(['status' => 1, 'id' => '5f6b62d2e6dbf00abd050000']);

        self::assertEquals(
            '5f6b62d2e6dbf00abd050000',
            (new OrderRepository($client))->create(new Order())
        );
    }

    public function test_order_is_not_created(): void
    {
        $client = $this->createMock(Client::class);
        $client->method('get')->willReturn(['status' => 0]);

        self::assertFalse((new OrderRepository($client))->create(new Order()));
    }

    public function test_order_is_updated(): void
    {
        $client = $this->createMock(Client::class);
        $client->method('get')->willReturn(['status' => 1, 'id' => '5f6b62d2e6dbf00abd050000']);

        self::assertTrue((new OrderRepository($client))->update(new Order()));
    }

    public function test_order_is_not_updated(): void
    {
        $client = $this->createMock(Client::class);
        $client->method('get')->willReturn(['status' => 0]);

        self::assertFalse((new OrderRepository($client))->update(new Order()));
    }
}
