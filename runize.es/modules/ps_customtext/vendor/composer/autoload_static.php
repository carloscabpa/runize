<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit42feb7acd272f7ad5d8724be04a54428
{
    public static $classMap = array (
        'CustomText' => __DIR__ . '/../..' . '/classes/CustomText.php',
        'MigrateData' => __DIR__ . '/../..' . '/classes/MigrateData.php',
        'Ps_Customtext' => __DIR__ . '/../..' . '/ps_customtext.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit42feb7acd272f7ad5d8724be04a54428::$classMap;

        }, null, ClassLoader::class);
    }
}
