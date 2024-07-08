<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitad0b8de9ec243309dd38b6f5a625fdd7
{
    public static $prefixesPsr0 = array (
        'N' => 
        array (
            'NlpTools\\' => 
            array (
                0 => __DIR__ . '/..' . '/nlp-tools/nlp-tools/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitad0b8de9ec243309dd38b6f5a625fdd7::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitad0b8de9ec243309dd38b6f5a625fdd7::$classMap;

        }, null, ClassLoader::class);
    }
}