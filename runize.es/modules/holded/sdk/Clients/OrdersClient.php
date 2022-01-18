<?php

declare(strict_types=1);

namespace Holded\SDK\Clients;

use Holded\SDK\DTOs\Order\Order;
use Holded\SDK\Repositories\Orders\OrderRepository;
use Holded\SDK\Services\HTTP\Client;

class OrdersClient
{
    /** @var OrderRepository */
    private $orderRepository;

    public function __construct(Client $client)
    {
        $this->orderRepository = new OrderRepository($client);
    }

    /**
     * @return bool|mixed
     */
    public function updateInvoice(Order $order)
    {
        return $this->orderRepository->create($order);
    }
}
