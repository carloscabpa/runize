<?php

declare(strict_types=1);

namespace Holded\Prestashop\Test\Unit\Services;

use Holded\Prestashop\DTOs\Order\Order as PrestashopDTOOrder;
use Holded\Prestashop\Services\OrderService;
use Holded\SDK\DTOs\Order\Order;
use Holded\SDK\Holded;
use Mockery as m;
use PHPUnit\Framework\TestCase;

class OrderServiceTest extends TestCase
{
    public function test_it_update_invoice_but_throw_exception(): void
    {
        m::mock('overload:\Order');

        $order = $this->createMock(Order::class);
        $client = $this->createMock(Holded::class);
        $client->method('updateInvoice')->willThrowException(new \Exception());

        /** @var m\MockInterface $context */
        $context = m::mock('overload:\Context');
        $context->shouldReceive('getContext')->andReturn($context);

        /** @var m\MockInterface $adapter */
        $adapter = m::mock('overload:\Holded\Prestashop\Adapters\OrderAdapter');
        $adapter->shouldReceive('fromPrestashopToDTO')->andReturn($order);

        $service = new OrderService($client);
        $result = $service->updateHoldedInvoice(1);

        self::assertFalse($result);
    }

    /**
     * @runInSeparateProcess
     * @preserveGlobalState disabled
     */
    public function test_it_update_invoice(): void
    {
        $order = $this->createMock(Order::class);
        $client = $this->createMock(Holded::class);
        $client->method('updateInvoice')->willReturn(true);

        m::mock('overload:\Order');

        /** @var m\MockInterface $context */
        $context = m::mock('overload:\Context');
        $context->shouldReceive('getContext')->andReturn($context);

        /** @var m\MockInterface $adapter */
        $adapter = m::mock('overload:\Holded\Prestashop\Adapters\OrderAdapter');
        $adapter->shouldReceive('fromPrestashopToDTO')->andReturn($order);

        $service = new OrderService($client);
        $result = $service->updateHoldedInvoice(1);

        self::assertTrue($result);
    }

    /**
     * @runInSeparateProcess
     * @preserveGlobalState disabled
     */
    public function test_it_create_invoice(): void
    {
        $order = new PrestashopDTOOrder();
        $order->prestashopOrderId = '1';
        $client = $this->createMock(Holded::class);
        $client->method('updateInvoice')->willReturn('32rml4252ion');

        $pOrder = m::mock('overload:\Order');
        $pOrder->id = 1;

        /** @var m\MockInterface $db */
        $db = m::mock('overload:\Db');
        $db->shouldReceive('getInstance')->andReturn($db);
        $db->shouldReceive('insert')->andReturn(true);

        /** @var m\MockInterface $context */
        $context = m::mock('overload:\Context');
        $context->shouldReceive('getContext')->andReturn($context);

        /** @var m\MockInterface $adapter */
        $adapter = m::mock('overload:\Holded\Prestashop\Adapters\OrderAdapter');
        $adapter->shouldReceive('fromPrestashopToDTO')->andReturn($order);

        $service = new OrderService($client);
        $result = $service->updateHoldedInvoice(1);

        self::assertTrue($result);
    }

    /**
     * @runInSeparateProcess
     * @preserveGlobalState disabled
     */
    public function test_it_update_invoices_but_not_there_are(): void
    {
        $client = $this->createMock(Holded::class);
        $client->method('updateInvoice')->willReturn('32rml4252ion');

        $orderInvoice = m::mock('overload:\OrderInvoice');
        $orderInvoice->shouldReceive('getByDateInterval')->andReturn([]);

        $service = new OrderService($client);
        $result = $service->updateHoldedInvoicesInRange(date('Y'), date('Y'));

        self::assertTrue($result);
    }

    /**
     * @runInSeparateProcess
     * @preserveGlobalState disabled
     */
    public function test_it_update_invoices(): void
    {
        m::mock('overload:\Order');

        $order = $this->createMock(Order::class);
        $client = $this->createMock(Holded::class);
        $client->method('updateInvoice')->willReturn(true);

        //m::mock('overload:\Order');

        $orderInvoice = m::mock('overload:\OrderInvoice');
        $orderInvoice->id_order = 1;
        $orderInvoice->shouldReceive('getByDateInterval')->andReturn([$orderInvoice]);

        /** @var m\MockInterface $context */
        $context = m::mock('overload:\Context');
        $context->shouldReceive('getContext')->andReturn($context);

        /** @var m\MockInterface $adapter */
        $adapter = m::mock('overload:\Holded\Prestashop\Adapters\OrderAdapter');
        $adapter->shouldReceive('fromPrestashopToDTO')->andReturn($order);

        $service = new OrderService($client);
        $result = $service->updateHoldedInvoicesInRange(date('Y'), date('Y'));

        self::assertTrue($result);
    }
}
