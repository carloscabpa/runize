<?php

declare(strict_types=1);

namespace Holded\Prestashop;

use Holded\Prestashop\Hooks\Hooks;
use Holded\Prestashop\Services\OrderService;
use Holded\Prestashop\Services\ProductService;
use Holded\Prestashop\Services\ShopService;
use Holded\Prestashop\Traits\DisplayTrait;
use Holded\Prestashop\Traits\ProcessFormTrait;
use Holded\Prestashop\Traits\SQLTrait;
use Holded\SDK\Holded as HoldedSDK;

class Holded extends \Module
{
    use Hooks;
    use ProcessFormTrait;
    use DisplayTrait;
    use SQLTrait;

    /** @var string */
    protected $output = '';

    /** @var ProductService */
    protected $productService;

    /** @var OrderService */
    protected $orderService;

    /** @var ShopService */
    protected $shopService;

    public function __construct()
    {
        $manifest = $this->readManifest();

        $this->name = 'holded';
        $this->tab = 'billing_invoicing';
        $this->version = sprintf('3.0.0.%s', $manifest['BUILD_COMMIT']);
        $this->author = 'Holded';
        $this->need_instance = 0;
        $this->bootstrap = true;
        $this->ps_versions_compliancy = ['min' => '1.6', 'max' => _PS_VERSION_];
        $this->module_key = '084fe8aecafea8b2f84cca493377eb9b';

        if (!defined('HOLDED_VERSION')) {
            define('HOLDED_VERSION', $this->version);
        }

        parent::__construct();

        $this->controllers = ['orders', 'products'];

        $this->displayName = $this->l('Holded', 'holded');
        $this->description = $this->l('Holded for Prestashop', 'holded');

        if (!\Configuration::get('Holded')) {
            $this->warning = $this->l('No name provided', 'holded');
        }

        $apiKey = \Configuration::get('holdedkey') ?: \Tools::getValue('holdedkey') ?: '';
        $holdedUrl = \Configuration::get('holdeddebugurl');

        $holdedUrlInEnv = getenv('HOLDED_URL');
        $holdedUrl = $holdedUrl ?: $holdedUrlInEnv ?: null;

        $holdedSDK = new HoldedSDK($apiKey, $holdedUrl);

        $this->productService = new ProductService($holdedSDK);
        $this->orderService = new OrderService($holdedSDK);
        $this->shopService = new ShopService($holdedSDK);

        if (\Configuration::get('holdedversion') !== $this->version) {
            $this->holdedInstall();
            \Configuration::updateValue('holdedversion', $this->version);
        }
    }

    public function install(): bool
    {
        return parent::install() && $this->holdedInstall();
    }

    private function holdedInstall(): bool
    {
        $this->shopService->checkShop();

        $this->createTables();

        return $this->registerHook('actionValidateOrder') && // Update order
            $this->registerHook('actionOrderStatusPostUpdate') && // Update order
            $this->registerHook('actionProductUpdate') && // Update product
            $this->registerHook('actionUpdateQuantity'); // Update stock
    }

    public function uninstall(): bool
    {
        $this->shopService->removeShop();

        \Configuration::deleteByName('holdedkey');

        $this->removeTables();

        return parent::uninstall();
    }

    public function getContent(): string
    {
        $this->process();
        $this->displayContent();

        return $this->output;
    }

    /**
     * @return array<string, mixed>
     */
    public function readManifest(): array
    {
        $manifest = file_get_contents(__DIR__.'/../manifest.json');

        if ($manifest === false) {
            throw new \Exception('File manifest not found.');
        }

        $data = json_decode($manifest, true);

        if ($data === null) {
            throw new \Exception('File manifest not able to read.');
        }

        return $data;
    }
}
