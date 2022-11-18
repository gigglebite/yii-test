<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit96e26e28bf2e83e1f09faa84476b4293
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Yii' => __DIR__ . '/..' . '/yiisoft/yii/framework/yii.php',
        'YiiBase' => __DIR__ . '/..' . '/yiisoft/yii/framework/YiiBase.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit96e26e28bf2e83e1f09faa84476b4293::$classMap;

        }, null, ClassLoader::class);
    }
}
