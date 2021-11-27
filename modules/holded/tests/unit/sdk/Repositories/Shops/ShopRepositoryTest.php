<?php

declare(strict_types=1);

namespace Holded\SDK\Tests\Unit\Repositories\Shops;

use Holded\SDK\DTOs\Shop\Shop;
use Holded\SDK\Repositories\Shops\ShopRepository;
use Holded\SDK\Services\HTTP\Client;
use PHPUnit\Framework\TestCase;

class ShopRepositoryTest extends TestCase
{
    public function test_shop_exists(): void
    {
        $client = $this->createMock(Client::class);
        $client->method('call')->willReturn(['status' => 1]);

        self::assertTrue((new ShopRepository($client))->check(new Shop()));
    }

    public function test_shop_not_exists(): void
    {
        $client = $this->createMock(Client::class);
        $client->method('call')->willReturn(['status' => 0]);

        self::assertFalse((new ShopRepository($client))->check(new Shop()));
    }
}
