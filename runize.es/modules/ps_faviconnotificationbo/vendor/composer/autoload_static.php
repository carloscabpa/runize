<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit347b5104c364429d1dd14e308b6ac02f
{
    public static $classMap = array (
        'AdminConfigureFaviconBoController' => __DIR__ . '/../..' . '/controllers/admin/AdminConfigureFaviconBoController.php',
        'Ps_faviconnotificationbo' => __DIR__ . '/../..' . '/ps_faviconnotificationbo.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit347b5104c364429d1dd14e308b6ac02f::$classMap;

        }, null, ClassLoader::class);
    }
}
