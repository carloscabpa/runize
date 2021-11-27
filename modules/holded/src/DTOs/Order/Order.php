<?php

declare(strict_types=1);

namespace Holded\Prestashop\DTOs\Order;

class Order extends \Holded\SDK\DTOs\Order\Order
{
    /** @var string */
    public $prestashopOrderStatus;

    /** @var string */
    public $prestashopOrderId;

    /** @var int */
    public $prestashopCustomer;

    /** @var string */
    public $prestashopTotalPaid;

    /** @var string */
    public $prestashopTotalPaidTaxExcluded;

    /** @var string */
    public $prestashopTotalPaidTaxIncluded;

    /** @var string */
    public $prestashopConversionRate;

    /** @var string */
    public $prestashopInvoiceNumber;

    /** @var string */
    public $prestashopIdCarrier;

    /** @var string */
    public $prestashopReference;

    /** @var string */
    public $prestashopGift;

    /** @var string */
    public $prestashopGiftMessage;

    /** @var string */
    public $prestashopShippingNumber;

    /** @var int|false */
    public $prestashopInvoiceDate;

    /** @var int|false */
    public $prestashopDeliveryDate;

    /** @var int|false */
    public $prestashopOrderUpdated;

    /** @var string */
    public $prestashopModule;

    /** @var string */
    public $prestashopPayment;

    /** @var string */
    public $prestashopPayment_fee;

    /** @var string */
    public $prestashopPayment_fee_rate;

    /** @var string */
    public $prestashopStoreId;

    /** @var string */
    public $prestashopStore;

    public function jsonSerialize()
    {
        return array_merge(
            parent::jsonSerialize(),
            [
                'prestashopOrderStatus'          => $this->prestashopOrderStatus,
                'prestashopOrderId'              => $this->prestashopOrderId,
                'prestashopCustomer'             => $this->prestashopCustomer,
                'prestashopTotalPaid'            => $this->prestashopTotalPaid,
                'prestashopTotalPaidTaxExcluded' => $this->prestashopTotalPaidTaxExcluded,
                'prestashopTotalPaidTaxIncluded' => $this->prestashopTotalPaidTaxIncluded,
                'prestashopConversionRate'       => $this->prestashopConversionRate,
                'prestashopInvoiceNumber'        => $this->prestashopInvoiceNumber,
                'prestashopIdCarrier'            => $this->prestashopIdCarrier,
                'prestashopReference'            => $this->prestashopReference,
                'prestashopGift'                 => $this->prestashopGift,
                'prestashopGiftMessage'          => $this->prestashopGiftMessage,
                'prestashopShippingNumber'       => $this->prestashopShippingNumber,
                'prestashopInvoiceDate'          => $this->prestashopInvoiceDate,
                'prestashopDeliveryDate'         => $this->prestashopDeliveryDate,
                'prestashopOrderUpdated'         => $this->prestashopOrderUpdated,
                'prestashopModule'               => $this->prestashopModule,
                'prestashopPayment'              => $this->prestashopPayment,
                'prestashopPayment_fee'          => $this->prestashopPayment_fee,
                'prestashopPayment_fee_rate'     => $this->prestashopPayment_fee_rate,
                'prestashopStoreId'              => $this->prestashopStoreId,
                'prestashopStore'                => $this->prestashopStore,
            ]
        );
    }
}
