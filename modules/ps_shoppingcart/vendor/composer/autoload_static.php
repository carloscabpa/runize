<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit770b71cb9f8844949aeeddb580ae2df3
{
    public static $classMap = array (
        'Ps_Shoppingcart' => __DIR__ . '/../..' . '/ps_shoppingcart.php',
        'Ps_ShoppingcartAjaxModuleFrontController' => __DIR__ . '/../..' . '/controllers/front/ajax.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit770b71cb9f8844949aeeddb580ae2df3::$classMap;

        }, null, ClassLoader::class);
    }
}