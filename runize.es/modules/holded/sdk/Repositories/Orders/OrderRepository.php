<?php

declare(strict_types=1);

namespace Holded\SDK\Repositories\Orders;

use Holded\SDK\DTOs\Order\Order;
use Holded\SDK\Repositories\AbstractRepository;

final class OrderRepository extends AbstractRepository
{
    /**
     * @return false|mixed
     */
    public function create(Order $order)
    {
        $result = $this->client->get('/add/doc/salesorder', $order);

        return (is_array($result) && isset($result['status']) && $result['status'] == 1)
            ? $result['id']
            : false;
    }

    public function update(Order $order): bool
    {
        $result = $this->client->get('/update/doc/salesorder/'.$order->holdedId, $order);

        return !is_array($result) || !isset($result['status']) || $result['status'] != 0;
    }
}
