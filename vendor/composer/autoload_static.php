<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite513f78424eb710c5f1e5dc0cebbff0d
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\Arquitetura\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\Arquitetura\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite513f78424eb710c5f1e5dc0cebbff0d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite513f78424eb710c5f1e5dc0cebbff0d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite513f78424eb710c5f1e5dc0cebbff0d::$classMap;

        }, null, ClassLoader::class);
    }
}
