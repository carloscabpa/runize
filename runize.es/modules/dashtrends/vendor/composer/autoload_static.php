<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb9d506c9a76b4d55ccd3a1a39a17efe9
{
    public static $classMap = array (
        'dashtrends' => __DIR__ . '/../..' . '/dashtrends.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitb9d506c9a76b4d55ccd3a1a39a17efe9::$classMap;

        }, null, ClassLoader::class);
    }
}
