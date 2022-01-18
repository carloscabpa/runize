<?php

declare(strict_types=1);

namespace Holded\Prestashop\Adapters;

use Holded\Prestashop\DTOs\Order\Order;
use Holded\SDK\DTOs\Order\Item;

class OrderAdapter
{
    public static function fromPrestashopToDTO(\Order $prestashopOrder, \Context $context = null): Order
    {
        $customer = new \Customer($prestashopOrder->id_customer);
        $addressInvoice = new \Address($prestashopOrder->id_address_invoice);
        $addressShipping = new \Address($prestashopOrder->id_address_delivery);
        $orderDateUpdated = explode(' ', $prestashopOrder->date_upd);
        $orderDateUpdated = strtotime($orderDateUpdated[0]);

        $orderDateAdded = explode(' ', $prestashopOrder->date_add);
        $orderDateAdded = strtotime($orderDateAdded[0]);

        // Invoice date
        $orderInvoiceDate = explode(' ', $prestashopOrder->invoice_date);
        $orderInvoiceDate = strtotime($orderInvoiceDate[0]);
        if ($orderInvoiceDate < 0) {
            $orderInvoiceDate = 0;
        }

        // Delivery date
        $orderDeliveryDate = explode(' ', $prestashopOrder->delivery_date);
        $orderDeliveryDate = strtotime($orderDeliveryDate[0]);
        if ($orderDeliveryDate < 0) {
            $orderDeliveryDate = 0;
        }

        $addressProvince = '';
        if ($addressInvoice->id_state) {
            $addressState = new \State((int) $addressInvoice->id_state);
            $addressProvince = $addressState->name;
        }

        $shippingProvince = '';
        if ($addressShipping->id_state) {
            $shippingState = new \State((int) $addressShipping->id_state);
            $shippingProvince = $shippingState->name;
        }

        $holdedId = \Db::getInstance()->getValue('
            SELECT id_holded
            FROM '._DB_PREFIX_.'holded_order_mapping
            WHERE id_order='.$prestashopOrder->id);

        $order = new Order();
        $order->holdedId = $holdedId;
        $order->marketplace = 'prestashop';
        $order->siteUrl = (new \Shop($prestashopOrder->id_shop))->getBaseURL(true);
        $order->contact_code = $addressInvoice->dni;
        $order->contact_name = $customer->firstname.' '.$customer->lastname;

        $order->contact_email = $customer->email;
        $order->contact_phone = $addressInvoice->phone;
        $order->contact_mobile = $addressInvoice->phone_mobile;
        $order->contact_stateid = $addressInvoice->id_state;
        $order->contact_tradename = $addressInvoice->alias;
        $order->contact_company = $addressInvoice->company;
        $order->contact_vat = $addressInvoice->vat_number;
        $order->contact_other = $addressInvoice->other;
        $order->contact_address = $addressInvoice->address1;
        $order->contact_city = $addressInvoice->city;
        $order->contact_cp = $addressInvoice->postcode;
        $order->contact_province = $addressProvince;
        $order->contact_country = $addressInvoice->country;
        $order->contact_countrycode = \Tools::strtolower(\Country::getIsoById($addressInvoice->id_country));
        $order->desc = '';
        $order->date = $orderDateAdded;
        $order->notes = '';
        $order->saleschannel = null;
        $order->language = self::getLanguage($prestashopOrder);
        $order->pmtype = null;
        $order->shipping_ad = $addressShipping->address1;
        $order->shipping_cp = $addressShipping->postcode;
        $order->shipping_ci = $addressShipping->city;
        $order->shipping_pr = $shippingProvince;
        $order->shipping_co = $addressShipping->country;
        $order->shipping_cocode = \Tools::strtolower(\Country::getIsoById($addressShipping->id_country));
        $order->holdedBuild = '2.01';

        $order->prestashopOrderStatus = $prestashopOrder->current_state;
        $order->prestashopOrderId = $prestashopOrder->id;
        $order->prestashopCustomer = $addressInvoice->id_customer;
        $order->prestashopTotalPaid = $prestashopOrder->total_paid;
        $order->prestashopTotalPaidTaxExcluded = $prestashopOrder->total_paid_tax_excl;
        $order->prestashopTotalPaidTaxIncluded = $prestashopOrder->total_paid_tax_incl;
        $order->prestashopConversionRate = $prestashopOrder->conversion_rate;
        $order->prestashopInvoiceNumber = $prestashopOrder->invoice_number;
        $order->prestashopIdCarrier = $prestashopOrder->id_carrier;
        $order->prestashopReference = $prestashopOrder->reference;
        $order->prestashopGift = $prestashopOrder->gift;
        $order->prestashopGiftMessage = $prestashopOrder->gift_message;
        $order->prestashopShippingNumber = $prestashopOrder->shipping_number;
        $order->prestashopInvoiceDate = $orderInvoiceDate;
        $order->prestashopDeliveryDate = $orderDeliveryDate;
        $order->prestashopOrderUpdated = $orderDateUpdated;
        $order->prestashopModule = $prestashopOrder->module;
        $order->prestashopPayment = $prestashopOrder->payment;

        // Check fee module fields
        if (isset($prestashopOrder->payment_fee)) {
            $order->prestashopPayment_fee = $prestashopOrder->payment_fee;
        }
        if (isset($prestashopOrder->payment_fee_rate)) {
            $order->prestashopPayment_fee_rate = $prestashopOrder->payment_fee_rate;
        }

        $paymentMethod = $prestashopOrder->module;
        switch ($paymentMethod) {
            case 'cod':
                $order->notes .= ' Paid by cash';
                break;
            case 'cheque':
                $order->notes .= ' Paid by check';
                break;
            case 'paypal':
                $order->notes .= ' Paid by paypal';
                break;
            case 'bankwire':
                $order->notes .= ' Paid by bank transfer';
                break;
            case 'redsys':
                $order->notes .= ' Paid by bank card';
                break;
            default:
                $order->notes .= ' Paid by '.(string) $paymentMethod;
                break;
        }

        $order->items = self::getOrderItems($prestashopOrder, $context);

        $currency = self::getCurrency((int) $prestashopOrder->id_currency);

        $order->currency = (string) $currency['code'];
        $order->currencyChange = (float) $currency['conversion'];

        // Get shop from context (for multi store)
        if (!is_null($context)) {
            $order->prestashopStoreId = $context->shop->id;
            $order->prestashopStore = $context->shop->name;
        }

        return $order;
    }

    private static function getLanguage(\Order $prestashopOrder): string
    {
        $addressShipping = new \Address($prestashopOrder->id_address_delivery);

        if (in_array(\Tools::strtolower($addressShipping->country), ['spain', 'españa', 'espana'])) {
            return 'es';
        }

        if (in_array(\Tools::strtolower($addressShipping->country), ['france', 'francia'])) {
            return 'fr';
        }

        return 'en';
    }

    /**
     * @return Item[]
     */
    private static function getOrderItems(\Order $prestashopOrder, \Context $context = null): array
    {
        $itemsArray = [];

        $extraTax = 0;
        $outterExtraTax = 0;
        $sumSubtotal = 0;

        foreach ($prestashopOrder->getProducts() as $value) {
            $totalProductPrice = $value['total_price_tax_excl'];
            $productWithTaxes = $totalProductPrice * (1 + ($value['tax_rate'] / 100));
            $differenceValue = $value['total_price_tax_incl'] - $productWithTaxes;

            $receqTax = 0;
            if ($differenceValue < 1) {
                // Old system
                $pendingTaxes = 0;

                if (isset($value['tax_calculator']->taxes[0])) {
                    $pendingTaxes = $value['tax_rate'] - $value['tax_calculator']->taxes[0]->rate;
                }

                // Check if pendingTaxes 0 is right
                if (!$pendingTaxes) {
                    $pendingTaxesExtra = 0;

                    if ($value['unit_price_tax_excl'] > 0) {
                        $pendingTaxesExtra = (($value['unit_price_tax_incl'] / $value['unit_price_tax_excl']) * 100) - 100;
                        $pendingTaxesExtra -= $value['tax_rate'];
                    }

                    if ($pendingTaxesExtra < 0) {
                        $pendingTaxesExtra = 0;
                    }

                    if ($pendingTaxesExtra) {
                        $receqTax = round($pendingTaxesExtra, 1);
                    }
                } else {
                    if ($pendingTaxes < 0) {
                        $pendingTaxes = 0;
                    }

                    $extraTax = $pendingTaxes;
                    $outterExtraTax = $pendingTaxes;
                    $pendingTaxes = round($pendingTaxes, 2);

                    if ($pendingTaxes) {
                        $value['tax_rate'] -= $extraTax;
                        $receqTax = $pendingTaxes;
                    }
                }
            } else {
                $pendingTaxes = $differenceValue;
                $extraTax = $pendingTaxes;
                $receqTax = round(($extraTax * 100) / $totalProductPrice, 1);
            }

            $ecoTaxItem = null;
            $unitPriceTaxExcl = $value['unit_price_tax_excl'];
            $value['ecotax'] = (float) $value['ecotax'];

            if (!empty($value['ecotax'])) {
                $unitPriceTaxExcl = $value['unit_price_tax_excl'] - $value['ecotax'];

                $ecoTaxItem = new Item();
                $ecoTaxItem->name = $value['product_name'];
                $ecoTaxItem->desc = '';
                $ecoTaxItem->units = (float) $value['product_quantity'];
                $ecoTaxItem->subtotal = (float) $value['ecotax'];
                $ecoTaxItem->tax = (float) $value['ecotax_tax_rate'];
                $ecoTaxItem->k = 'ecotax';
                $ecoTaxItem->taxes = [$ecoTaxItem->tax];
            }

            $item = new Item();
            $item->name = $value['product_name'];
            $item->desc = '';
            $item->units = (float) $value['product_quantity'];
            $item->subtotal = (float) $unitPriceTaxExcl;
            $item->tax = (float) $value['tax_rate'];
            $item->sku = $value['product_reference'];
            $item->stock = (float) $value['current_stock'];
            $item->productId = $value['product_id'];
            $item->taxes = [$item->tax];

            if ($receqTax) {
                $item->receq = $receqTax;
            }

            $itemsArray[] = $item;

            $sumSubtotal += (float) $unitPriceTaxExcl * (float) $value['product_quantity'];

            if ($ecoTaxItem) {
                $itemsArray[] = $ecoTaxItem;
                $sumSubtotal += (float) $value['ecotax'] * (float) $value['product_quantity'];
            }
        }

        if (!is_null($context) && is_null($context->cart)) {
            $cart = new \Cart($context->cookie->id_cart);
        } elseif (!is_null($context) && !is_null($context->cart)) {
            $cart = $context->cart;
        } else {
            $cart = new \Cart($prestashopOrder->id_cart);
        }

        $carrier = new \Carrier($prestashopOrder->id_carrier, \Configuration::get('PS_LANG_DEFAULT'));
        $discountFreeShipping = false;

        foreach ($prestashopOrder->getDiscounts() as $orderDiscount) {
            $addedDiscount = false;

            foreach ($cart->getCartRules() as $cr) {
                if ($cr['id_cart_rule'] != $orderDiscount['id_cart_rule']) {
                    continue;
                }

                // For free shipping added as discount and carrier free shipping disable
                if (isset($orderDiscount['value_tax_excl']) && $orderDiscount['value_tax_excl'] == $prestashopOrder->total_shipping_tax_excl && !$carrier->is_free) {
                    $discountFreeShipping = true;
                    continue;
                }

                if (!$cr['reduction_product']) {
                    continue;
                }

                // If no reduction product, global discount
                $discountTaxes = self::getItemTaxForProductId($itemsArray, $cr['reduction_product']);
                if (count($discountTaxes)) {
                    $addedDiscount = true;

                    $discountItem = new Item();
                    $discountItem->name = 'Descuento';
                    $discountItem->desc = '';
                    $discountItem->units = 1;
                    $discountItem->subtotal = -$orderDiscount['value_tax_excl'];
                    $discountItem->tax = -$discountTaxes['tax'];
                    $discountItem->k = 'discount';
                    $discountItem->taxes = [$discountItem->tax];

                    if (isset($discountTaxes['receq'])) {
                        $discountItem->receq = $discountTaxes['receq'];
                    }

                    $itemsArray[] = $discountItem;
                }
            }

            if (!$addedDiscount && !$discountFreeShipping) {
                // Global discount...
                $totalSubtotal = 0;
                foreach ($itemsArray as $item) {
                    if (isset($item->k) && $item->k == 'discount') {
                        continue;
                    }
                    $totalSubtotal += $item->subtotal;
                }

                if (!$totalSubtotal) {
                    continue;
                }

                foreach ($itemsArray as $item) {
                    if (isset($item->k) && $item->k == 'discount') {
                        continue;
                    }

                    $itemDiscount = ($item->subtotal / $totalSubtotal) * $orderDiscount['value_tax_excl'];

                    $discountItem = new Item();
                    $discountItem->name = 'Descuento';
                    $discountItem->desc = '';
                    $discountItem->units = 1;
                    $discountItem->subtotal = -$itemDiscount;
                    $discountItem->tax = $item->tax;
                    $discountItem->k = 'discount';
                    $discountItem->taxes = [$discountItem->tax];

                    if (isset($discountTaxes['receq'])) {
                        $discountItem->receq = $item->receq;
                    }

                    $itemsArray[] = $discountItem;
                }
            }
        }

        //Shipping cost
        if ($prestashopOrder->total_shipping > 0) {
            $taxRate = $prestashopOrder->carrier_tax_rate;

            // Just spanish accounts
            $taxesArray = [21, 10, 4];
            $finalDiff = 0;
            foreach ($taxesArray as $item) {
                $diff = abs($item - $taxRate);

                if ($diff > 5 && $diff < 6) {
                    $finalDiff = 5.2;
                    $taxRate -= 5.2;
                    break;
                } elseif ($diff > 1 && $diff < 2) {
                    $finalDiff = 1.4;
                    $taxRate -= 1.4;
                    break;
                } elseif ($diff > 0 && $diff < 1) {
                    $finalDiff = 0.5;
                    $taxRate -= 0.5;
                    break;
                } elseif ($diff > 1 && $diff < 2) {
                    $finalDiff = 1.75;
                    $taxRate -= 1.75;
                    break;
                }
            }

            if ($discountFreeShipping) {
                $discountItem = new Item();
                $discountItem->name = 'Descuento';
                $discountItem->desc = '';
                $discountItem->units = 1;
                $discountItem->subtotal = -$prestashopOrder->total_shipping_tax_excl;
                $discountItem->tax = $taxRate;
                $discountItem->k = 'discount';
                $discountItem->taxes = [$discountItem->tax];

                $itemsArray[] = $discountItem;
            }

            $shippingItem = new Item();
            $shippingItem->name = 'Shipping';
            $shippingItem->desc = '';
            $shippingItem->units = 1;
            $shippingItem->subtotal = $prestashopOrder->total_shipping_tax_excl;
            $shippingItem->tax = $taxRate;
            $shippingItem->k = 'shipping';
            $shippingItem->taxes = [$shippingItem->tax];

            if ($finalDiff) {
                $shippingItem->receq = $finalDiff;
            }

            $itemsArray[] = $shippingItem;
        } else {
            $orderIdCart = $prestashopOrder->id_cart;
            $freeShippingCart = array_filter($cart->getCartRules(), function ($v, $k) use ($orderIdCart) {
                return $v['id_cart'] === $orderIdCart;
            }, ARRAY_FILTER_USE_BOTH);

            // check free shipping activated
            if (!empty($freeShippingCart) && $freeShippingCart[0]['free_shipping'] == 1) {
                $shippingItem = new Item();
                $shippingItem->name = $freeShippingCart[0]['name'];
                $shippingItem->desc = '';
                $shippingItem->units = 1;
                $shippingItem->subtotal = 0;
                $shippingItem->tax = 0;
                $shippingItem->k = 'shipping';
                $shippingItem->taxes = [$shippingItem->tax];

                $itemsArray[] = $shippingItem;
            }
        }

        // Wrapping cost
        if ($prestashopOrder->total_wrapping > 0) {
            $taxRate = \Tax::getCarrierTaxRate($prestashopOrder->id_carrier, $prestashopOrder->id_address_delivery);

            $shippingItem = new Item();
            $shippingItem->name = 'Wrapping';
            $shippingItem->desc = '';
            $shippingItem->units = 1;
            $shippingItem->subtotal = $prestashopOrder->total_wrapping_tax_excl;
            $shippingItem->tax = $taxRate - $outterExtraTax;
            $shippingItem->k = 'wrapping';
            $shippingItem->taxes = [$shippingItem->tax];

            $itemsArray[] = $shippingItem;
        }

        // Reembolso
        if (isset($prestashopOrder->payment_fee) && isset($prestashopOrder->payment_fee_rate) && $prestashopOrder->payment_fee) {
            $refundTax = $prestashopOrder->payment_fee_rate;
            if ($prestashopOrder->payment_fee_rate >= $extraTax) {
                $refundTax -= $extraTax;
            }

            $shippingItem = new Item();
            $shippingItem->name = $prestashopOrder->payment;
            $shippingItem->desc = '';
            $shippingItem->units = 1;
            $shippingItem->subtotal = $prestashopOrder->payment_fee / (1 + $prestashopOrder->payment_fee_rate / 100);
            $shippingItem->tax = $refundTax;
            $shippingItem->k = 'shipping';
            $shippingItem->taxes = [$shippingItem->tax];

            if ($shippingItem->subtotal) {
                $itemsArray[] = $shippingItem;
            }
        }

        return $itemsArray;
    }

    /**
     * @return array<string, mixed>
     */
    private static function getCurrency(int $currencyId): array
    {
        $currency = new \Currency($currencyId);

        return [
            'code'       => strtolower($currency->iso_code),
            'conversion' => $currency->conversion_rate,
        ];
    }

    /**
     * @param mixed[] $items
     * @param mixed   $pid
     *
     * @return mixed[]
     */
    private static function getItemTaxForProductId($items, $pid): array
    {
        if (!is_array($items)) {
            return [];
        }

        foreach ($items as $item) {
            if ($pid === $item->productId) {
                $itemTaxes = [
                    'tax' => $item->tax,
                ];

                if (isset($item->receq)) {
                    $itemTaxes['receq'] = $item->receq;
                }

                return $itemTaxes;
            }
        }

        return [];
    }
}
