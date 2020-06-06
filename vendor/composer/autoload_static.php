<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite8e9e2e5d1c93432fa77ad1d4531a861
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'League\\HTMLToMarkdown\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'League\\HTMLToMarkdown\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/html-to-markdown/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite8e9e2e5d1c93432fa77ad1d4531a861::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite8e9e2e5d1c93432fa77ad1d4531a861::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInite8e9e2e5d1c93432fa77ad1d4531a861::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
