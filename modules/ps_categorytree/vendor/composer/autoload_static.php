<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3b9326172aa88121238d62342b4d8349
{
    public static $classMap = array (
        'Ps_CategoryTree' => __DIR__ . '/../..' . '/ps_categorytree.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit3b9326172aa88121238d62342b4d8349::$classMap;

        }, null, ClassLoader::class);
    }
}
