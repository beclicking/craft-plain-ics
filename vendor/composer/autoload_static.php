<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit697a7099aa13d8ee162ea9b74cb689e2
{
    public static $prefixesPsr0 = array (
        'E' => 
        array (
            'Eluceo\\iCal' => 
            array (
                0 => __DIR__ . '/..' . '/eluceo/ical/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit697a7099aa13d8ee162ea9b74cb689e2::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
