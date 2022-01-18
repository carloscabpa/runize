<?php

declare(strict_types=1);

namespace Holded\Prestashop\Hooks;

trait Hooks
{
    /**
     * @param mixed[] $params
     */
    public function hookActionValidateOrder(array $params): void
    {
        if ($params['order']->current_state) {
            $this->orderCompleted($params);
        }
    }

    /**
     * @param mixed[] $params
     */
    public function hookActionOrderStatusPostUpdate(array $params): void
    {
        if ($params['newOrderStatus']->id) {
            $this->orderCompleted($params);
        }
    }

    /**
     * @param mixed[] $params
     */
    private function orderCompleted(array $params): void
    {
        $orderId = \Validate::isLoadedObject($params['newOrderStatus'])
            ? $params['id_order']
            : $params['order']->id;

        $this->orderService->updateHoldedInvoice((int) $orderId);
    }

    /**
     * @param mixed[] $params
     */
    //public function hookActionProductSave(array $params): void
    //{
    //    $this->productService->updateHoldedProduct($params["product"]->id);
    //}

    /**
     * @param mixed[] $params
     */
    public function hookActionProductUpdate(array $params): void
    {
        if (!$this->productService->updateHoldedProduct((int) $params['product']->id)) {
            $this->productService->deleteHoldedProduct((int) $params['product']->id);
            $this->productService->updateHoldedProduct((int) $params['product']->id);
        }
    }

    /**
     * @param mixed[] $params
     */
    public function hookActionUpdateQuantity(array $params): void
    {
        if (is_numeric($params['id_product_attribute'])) {
            $params['id_product_attribute'] = (int) $params['id_product_attribute'];
        }
        $this->productService->updateHoldedProductStock((int) $params['id_product'], (int) $params['id_product_attribute']);
    }
}
