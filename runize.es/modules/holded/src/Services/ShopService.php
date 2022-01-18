<?php

declare(strict_types=1);

namespace Holded\Prestashop\Services;

use Holded\SDK\DTOs\Shop\Shop;

class ShopService extends AbstractService
{
    public function checkShop(): int
    {
        $syncShops = 0;

        $shops = \Shop::getShops(true, null, true);
        foreach ($shops as $shop) {
            $shopDto = $this->createShop(new \Shop($shop));
            if (!$this->holdedSDK->checkShop($shopDto)) {
                $message = sprintf('Holded: Error synchronizing %s - %s shop', $shopDto->shopUrl, $shopDto->shopName);
                $severity = 3;
            } else {
                $message = sprintf('Holded: Shop %s - %s synchronized', $shopDto->shopUrl, $shopDto->shopName);
                $severity = 1;

                ++$syncShops;
            }

            \PrestaShopLogger::addLog($message, $severity, null, null, null, true);
        }

        return $syncShops;
    }

    public function removeShop(): bool
    {
        $return = true;
        $shops = \Shop::getShops(true, null, true);
        foreach ($shops as $shop) {
            if (!$this->holdedSDK->removeShop($this->createShop(new \Shop($shop)))) {
                $return = false;
            }
        }

        return $return;
    }

    private function createShop(\Shop $prestashopShop): Shop
    {
        $shop = new Shop();
        $shop->shopUrl = $prestashopShop->getBaseURL(true);
        $shop->shopName = $prestashopShop->name;
        $shop->provider = 'prestashop';
        $shop->version = HOLDED_VERSION;

        return $shop;
    }
}
