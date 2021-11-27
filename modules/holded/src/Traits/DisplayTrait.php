<?php

declare(strict_types=1);

namespace Holded\Prestashop\Traits;

trait DisplayTrait
{
    public function displayContent(): void
    {
        if (getenv('HOLDED_DEBUG') == 1) {
            $this->output .= $this->displayDebug();
        }

        $this->output .= $this->displayInfo();
        $this->output .= $this->displayFormIntegrationApi();
        $this->output .= $this->displayFormSynchronization();
    }

    private function displayDebug(): string
    {
        $this->context->smarty->assign([
            'url_form'   => \AdminController::$currentIndex.'&configure='.$this->name.'&token='.\Tools::getAdminTokenLite('AdminModules'),
            'debug_url'  => \Configuration::get('holdeddebugurl'),
        ]);

        return $this->context->smarty->fetch($this->local_path.'src/Views/Templates/Admin/debugurl.tpl');
    }

    private function displayInfo(): string
    {
        $this->context->smarty->assign([
            'module_dir'  => $this->_path,
            'name'        => $this->displayName,
            'version'     => $this->version,
            'description' => $this->description,
            'iso_code'    => $this->context->language->iso_code,
        ]);

        return $this->context->smarty->fetch($this->local_path.'src/Views/Templates/Admin/information.tpl');
    }

    private function displayFormIntegrationApi(): string
    {
        $this->context->smarty->assign([
            'url_form' => \AdminController::$currentIndex.'&configure='.$this->name.'&token='.\Tools::getAdminTokenLite('AdminModules'),
            'api_key'  => \Configuration::get('holdedkey'),
        ]);

        return $this->context->smarty->fetch($this->local_path.'src/Views/Templates/Admin/integration.tpl');
    }

    private function displayFormSynchronization(): string
    {
        $this->context->smarty->assign([
            'url_form' => \AdminController::$currentIndex.'&configure='.$this->name.'&token='.\Tools::getAdminTokenLite('AdminModules'),
        ]);

        return $this->context->smarty->fetch($this->local_path.'src/Views/Templates/Admin/synchronization.tpl');
    }
}
