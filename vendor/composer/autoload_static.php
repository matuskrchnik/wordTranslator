<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf9e8d4648df6ba33a3985250f1f0bcd5
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zend\\Escaper\\' => 13,
        ),
        'P' => 
        array (
            'PhpOffice\\PhpWord\\' => 18,
            'PhpOffice\\Common\\' => 17,
        ),
        'D' => 
        array (
            'Dejurin\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zend\\Escaper\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-escaper/src',
        ),
        'PhpOffice\\PhpWord\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpoffice/phpword/src/PhpWord',
        ),
        'PhpOffice\\Common\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpoffice/common/src/Common',
        ),
        'Dejurin\\' => 
        array (
            0 => __DIR__ . '/..' . '/dejurin/php-google-translate-for-free/src',
        ),
    );

    public static $classMap = array (
        'PclZip' => __DIR__ . '/..' . '/pclzip/pclzip/pclzip.lib.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf9e8d4648df6ba33a3985250f1f0bcd5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf9e8d4648df6ba33a3985250f1f0bcd5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf9e8d4648df6ba33a3985250f1f0bcd5::$classMap;

        }, null, ClassLoader::class);
    }
}
