<?php

declare(strict_types=1);

namespace Holded\Prestashop\Traits;

trait ProcessFormTrait
{
    public function process(): void
    {
        if (getenv('HOLDED_DEBUG') == 1) {
            if (\Tools::isSubmit('holdeddebugurl')) {
                $this->syncDebugUrl();
            }
        }

        if (\Tools::isSubmit('holdedkey')) {
            $this->syncApiKey();
        }

        if (\Tools::isSubmit('importToHolded')) {
            $this->syncProducts();
        }

        $this->syncInvoices();
    }

    private function syncDebugUrl(): void
    {
        \Configuration::updateValue('holdeddebugurl', \Tools::getValue('holdeddebugurl'));
    }

    private function syncApiKey(): void
    {
        if (empty(\Tools::getValue('holdedkey'))) {
            \Configuration::updateValue('holdedkey', \Tools::getValue('holdedkey'));
            $this->output .= $this->displayError($this->l('Api key removed.', 'holded'));

            return;
        }

        \Configuration::updateValue('holdedkey', \Tools::getValue('holdedkey'));
        $totalShops = count(\Shop::getShops(true, null, true));
        $syncShops = $this->shopService->checkShop();

        if ($syncShops === 0) {
            // If an error occurred creating the shop, remove the API key.
            \Configuration::updateValue('holdedkey', '');
            $this->output .= $this->displayError($this->l('The Api key is not recognised by Holded.', 'holded'));
        } elseif ($syncShops === $totalShops) {
            $this->output .= $this->displayConfirmation($this->l('Api key saved.', 'holded'));
        } else {
            $this->output .= $this->displayConfirmation(sprintf($this->l('Api key saved. Synchronized %d/%d shops.', 'holded'), $syncShops, $totalShops));
        }
    }

    private function syncProducts(): void
    {
        if (empty(\Configuration::get('holdedkey'))) {
            $this->output .= $this->displayError($this->l('API key needed.', 'holded'));

            return;
        }

        $this->productService->updateAllProducts();
        $this->output .= $this->displayConfirmation($this->l('All previous products have been synced with your Holded account.', 'holded'));
    }

    private function syncInvoices(): void
    {
        $currentYear = date('Y');
        $this->checkInvoiceSync('submitSynchronization', $currentYear.'-01-01', date('Y-m-d'));
        $this->checkInvoiceSync('syncCurrentYear', $currentYear.'-01-01', $currentYear.'-12-31');
        $this->checkInvoiceSync('syncPreviousYear', ($currentYear - 1).'-01-01', ($currentYear - 1).'-12-31');
        $this->checkInvoiceSync('sync2PreviousYear', ($currentYear - 2).'-01-01', ($currentYear - 2).'-12-31');
        $this->checkInvoiceSync('syncQuarter1', $currentYear.'-01-01', $currentYear.'-03-31');
        $this->checkInvoiceSync('syncQuarter2', $currentYear.'-04-01', $currentYear.'-06-31');
        $this->checkInvoiceSync('syncQuarter3', $currentYear.'-07-01', $currentYear.'-09-31');
        $this->checkInvoiceSync('syncQuarter4', $currentYear.'-10-01', $currentYear.'-12-31');
        $this->checkInvoiceSync('syncJanuary', $currentYear.'-01-01', $this->lastDayOf('January'));
        $this->checkInvoiceSync('syncFebruary', $currentYear.'-02-01', $this->lastDayOf('February'));
        $this->checkInvoiceSync('syncMarch', $currentYear.'-03-01', $this->lastDayOf('March'));
        $this->checkInvoiceSync('syncApril', $currentYear.'-04-01', $this->lastDayOf('April'));
        $this->checkInvoiceSync('syncMay', $currentYear.'-05-01', $this->lastDayOf('May'));
        $this->checkInvoiceSync('syncJune', $currentYear.'-06-01', $this->lastDayOf('June'));
        $this->checkInvoiceSync('syncJuly', $currentYear.'-07-01', $this->lastDayOf('July'));
        $this->checkInvoiceSync('syncAugust', $currentYear.'-08-01', $this->lastDayOf('August'));
        $this->checkInvoiceSync('syncSeptember', $currentYear.'-09-01', $this->lastDayOf('September'));
        $this->checkInvoiceSync('syncOctober', $currentYear.'-10-01', $this->lastDayOf('October'));
        $this->checkInvoiceSync('syncNovember', $currentYear.'-11-01', $this->lastDayOf('November'));
        $this->checkInvoiceSync('syncDecember', $currentYear.'-12-01', $this->lastDayOf('December'));
    }

    private function syncRangeOfInvoices(string $from, string $to): void
    {
        $this->orderService->updateHoldedInvoicesInRange($from, $to);
        $this->output .= $this->displayConfirmation($this->l('Synchronization done.', 'holded'));
    }

    private function checkInvoiceSync(string $name, string $from, string $to): void
    {
        if (\Tools::isSubmit($name)) {
            $this->syncRangeOfInvoices($from, $to);
        }
    }

    private function lastDayOf(string $month): string
    {
        return date('Y-m-d', strtotime("last day of $month", time()) ?: time());
    }
}
