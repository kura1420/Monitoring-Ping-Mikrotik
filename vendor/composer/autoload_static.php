<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9878249e260d8c1334d1dfbccc1a713d
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Process\\' => 26,
            'Spatie\\Ssh\\' => 11,
        ),
        'R' => 
        array (
            'RouterOS\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
        'Spatie\\Ssh\\' => 
        array (
            0 => __DIR__ . '/..' . '/spatie/ssh/src',
        ),
        'RouterOS\\' => 
        array (
            0 => __DIR__ . '/..' . '/evilfreelancer/routeros-api-php/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9878249e260d8c1334d1dfbccc1a713d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9878249e260d8c1334d1dfbccc1a713d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9878249e260d8c1334d1dfbccc1a713d::$classMap;

        }, null, ClassLoader::class);
    }
}
