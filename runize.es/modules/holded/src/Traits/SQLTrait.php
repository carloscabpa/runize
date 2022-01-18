<?php

declare(strict_types=1);

namespace Holded\Prestashop\Traits;

trait SQLTrait
{
    public function createTables(): bool
    {
        $sql = [];
        $sql[] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'holded_product_mapping` (
                    `id_product` int(11) NOT NULL ,
                    `id_holded` VARCHAR(50) NOT NULL ,
                    PRIMARY KEY  (`id_product`,`id_holded`)
                ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;';
        $sql[] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'holded_order_mapping` (
                    `id_order` int(11) NOT NULL ,
                    `id_holded` VARCHAR(50) NOT NULL ,
                    PRIMARY KEY  (`id_order`,`id_holded`)
                ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;';

        foreach ($sql as $query) {
            if (\Db::getInstance()->execute($query) == false) {
                return false;
            }
        }

        return true;
    }

    public function removeTables(): bool
    {
        $sql = [];
        $sql[] = 'DROP TABLE IF EXISTS '._DB_PREFIX_.'holded_product_mapping';
        $sql[] = 'DROP TABLE IF EXISTS '._DB_PREFIX_.'holded_order_mapping';

        foreach ($sql as $query) {
            if (\Db::getInstance()->execute($query) == false) {
                return false;
            }
        }

        return true;
    }
}
