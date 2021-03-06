<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9dbe1e81cdb7ea604f2228684490e016
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
        '72579e7bd17821bb1321b87411366eae' => __DIR__ . '/..' . '/illuminate/support/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Translation\\' => 30,
        ),
        'N' => 
        array (
            'NoahBuscher\\Macaw\\' => 18,
        ),
        'I' => 
        array (
            'Illuminate\\Support\\' => 19,
            'Illuminate\\Database\\' => 20,
            'Illuminate\\Contracts\\' => 21,
            'Illuminate\\Container\\' => 21,
        ),
        'C' => 
        array (
            'Carbon\\' => 7,
        ),
        'A' => 
        array (
            'App\\third_party\\' => 16,
            'App\\models\\' => 11,
            'App\\libraries\\' => 14,
            'App\\hooks\\' => 10,
            'App\\helpers\\' => 12,
            'App\\core\\' => 9,
            'App\\controllers\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
        'NoahBuscher\\Macaw\\' => 
        array (
            0 => __DIR__ . '/..' . '/noahbuscher/macaw',
        ),
        'Illuminate\\Support\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/support',
        ),
        'Illuminate\\Database\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/database',
        ),
        'Illuminate\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/contracts',
        ),
        'Illuminate\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/container',
        ),
        'Carbon\\' => 
        array (
            0 => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon',
        ),
        'App\\third_party\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application/third_party',
        ),
        'App\\models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application/models',
        ),
        'App\\libraries\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application/libraries',
        ),
        'App\\hooks\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application/hooks',
        ),
        'App\\helpers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application/helpers',
        ),
        'App\\core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application/core',
        ),
        'App\\controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application/controllers',
        ),
    );

    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'Doctrine\\Common\\Inflector\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/inflector/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9dbe1e81cdb7ea604f2228684490e016::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9dbe1e81cdb7ea604f2228684490e016::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit9dbe1e81cdb7ea604f2228684490e016::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
