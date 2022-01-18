<?php

declare(strict_types=1);

namespace Holded\Prestashop\Controllers;

use Tools;

class HealthController extends \ModuleFrontController
{
    public function initContent(): void
    {
        $apiKey = Tools::getValue('api-key');
        if (empty(\Configuration::get('holdedkey')) || empty($apiKey) || $apiKey != \Configuration::get('holdedkey')) {
            http_response_code(401);

            $this->die();
        }

        http_response_code(200);

        $this->die();
    }

    /**
     * @param mixed[] $json
     */
    protected function die(array $json = []): void
    {
        if (empty($json)) {
            exit();
        }

        exit(json_encode($json));
    }
}
