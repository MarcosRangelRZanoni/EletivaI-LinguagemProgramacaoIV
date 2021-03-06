<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4bfbcf7e7ad1a039b758eea13575038c
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Aluno\\Rangel\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Aluno\\Rangel\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4bfbcf7e7ad1a039b758eea13575038c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4bfbcf7e7ad1a039b758eea13575038c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4bfbcf7e7ad1a039b758eea13575038c::$classMap;

        }, null, ClassLoader::class);
    }
}
