<?php

declare(strict_types=1);

namespace Holded\Prestashop\Services;

use Holded\Prestashop\Adapters\OrderAdapter;

class OrderService extends AbstractService
{
    public function updateHoldedInvoicesInRange(string $from, string $to): bool
    {
        $orderInvoices = \OrderInvoice::getByDateInterval($from, $to);
        if ($orderInvoices) {
            foreach ($orderInvoices as $orderInvoice) {
                $this->updateHoldedInvoice((int) $orderInvoice->id_order);
            }
        }

        return true;
    }

    public function updateHoldedInvoice(int $orderId): bool
    {
        $POrder = new \Order($orderId);
        try {
            $order = OrderAdapter::fromPrestashopToDTO($POrder, \Context::getContext());

            $result = $this->holdedSDK->updateInvoice($order);
            if (is_string($result)) {
                // Save ID in local prestashop database
                $data = ['id_order' => $order->prestashopOrderId, 'id_holded' => $result];
                \Db::getInstance()->insert('holded_order_mapping', $data);
            }
        } catch (\Exception $e) {
            return false;
        }

        return true;
    }
}
