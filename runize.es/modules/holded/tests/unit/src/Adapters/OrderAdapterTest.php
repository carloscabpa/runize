<?php

declare(strict_types=1);

namespace Holded\Prestashop\Test\Unit\Adapters;

use Holded\Prestashop\Adapters\OrderAdapter;
use Holded\SDK\DTOs\Order\Order;
use Mockery as m;
use PHPUnit\Framework\TestCase;

class OrderAdapterTest extends TestCase
{
    public function test_create_dto(): void
    {
        define('_DB_PREFIX_', 'something');
        define('_PS_BASE_URL_', 'something');

        /** @var m\MockInterface $country */
        $country = m::mock('overload:\Country');
        $country->shouldReceive('getIsoById')->andReturns('España');
        $country->shouldReceive('getValue')->andReturns(1);

        /** @var m\MockInterface $cart */
        $cart = m::mock('overload:\Cart');
        $cart->shouldReceive('getCartRules')->andReturns([
            [
                'id_cart_rule'      => 1,
                'reduction_product' => 1,
            ],
        ]);

        /** @var m\MockInterface $configuration */
        $configuration = m::mock('overload:\Configuration');
        $configuration->shouldReceive('get')->andReturns('ES');

        /** @var m\MockInterface $tax */
        $tax = m::mock('overload:\Tax');
        $tax->shouldReceive('getCarrierTaxRate')->andReturns(1.3);

        /** @var m\MockInterface $db */
        $db = m::mock('overload:\Db');
        $db->shouldReceive('getInstance')->andReturns($db);
        $db->shouldReceive('getValue')->andReturns(1);

        $tools = m::mock('overload:\Tools');
        $tools->shouldReceive('strtolower')->andReturns('spain', 'es', 'es');

        $prestashopOrder = $this->buildMockPrestashopOrder();

        self::assertInstanceOf(Order::class, OrderAdapter::fromPrestashopToDTO($prestashopOrder));
    }

    private function buildMockPrestashopOrder(): m\LegacyMockInterface
    {
        $prestashopOrder = m::mock('overload:\Order');
        $prestashopOrder->id_customer = 1;
        $prestashopOrder->id_address_invoice = 1;
        $prestashopOrder->id_address_delivery = 1;
        $prestashopOrder->date_upd = date('Y m');
        $prestashopOrder->date_add = date('Y m');
        $prestashopOrder->invoice_date = date('Y m');
        $prestashopOrder->delivery_date = date('Y m');
        $prestashopOrder->id = 1;
        $prestashopOrder->current_state = 1;
        $prestashopOrder->total_paid = 7.2;
        $prestashopOrder->total_paid_tax_excl = 1.2;
        $prestashopOrder->total_paid_tax_incl = 3.4;
        $prestashopOrder->conversion_rate = 1.1;
        $prestashopOrder->invoice_number = 1;
        $prestashopOrder->id_carrier = 1;
        $prestashopOrder->reference = '12enbby43';
        $prestashopOrder->gift = false;
        $prestashopOrder->gift_message = 'test';
        $prestashopOrder->shipping_number = '12enbby43';
        $prestashopOrder->module = 'module';
        $prestashopOrder->payment = 'cheque';
        $prestashopOrder->payment_fee = 1;
        $prestashopOrder->payment_fee_rate = 2;
        $prestashopOrder->id_cart = 1;
        $prestashopOrder->id_carrier = 1;
        $prestashopOrder->total_shipping_tax_excl = 1.3;
        $prestashopOrder->total_shipping = 2.4;
        $prestashopOrder->carrier_tax_rate = 0.1;
        $prestashopOrder->total_wrapping = 1.9;
        $prestashopOrder->id_address_delivery = 1;
        $prestashopOrder->total_wrapping_tax_excl = 1;
        $prestashopOrder->id_currency = 1;
        $prestashopOrder->id_shop = 1;

        $prestashopOrder->shouldReceive('getProducts')->andReturn([
            [
                'total_price_tax_excl' => 1,
                'tax_rate'             => 1,
                'total_price_tax_incl' => 0.1,
                'tax_calculator'       => '',
                'unit_price_tax_incl'  => 1,
                'unit_price_tax_excl'  => 1,
                'ecotax'               => 1,
                'product_quantity'     => '3',
                'ecotax_tax_rate'      => 1,
                'product_name'         => 'name',
                'product_reference'    => 'reference',
                'current_stock'        => '1.1',
                'product_id'           => 1,
            ],
        ]);
        $prestashopOrder->shouldReceive('getDiscounts')->andReturn([
            [
                'value_tax_excl' => 1,
                'id_cart_rule'   => 1,
            ],
        ]);

        return $prestashopOrder;
    }
}
