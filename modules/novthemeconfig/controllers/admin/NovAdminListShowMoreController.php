<?php

class NovAdminListshowmoreController extends ModuleAdminController {

    public function __construct()
    {
        parent::__construct();
		if (!(bool)Tools::getValue('ajax'))
        Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules').'&configure=novlistshowmore');
    }
}