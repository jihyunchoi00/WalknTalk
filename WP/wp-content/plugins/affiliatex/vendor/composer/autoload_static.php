<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc70b9e69ee523b08c58fd4770eaf15f3
{
    public static $files = array (
        '7c0d5460f58f8f22531d2f669cb34f74' => __DIR__ . '/../..' . '/includes/functions/HelperFunctions.php',
        'c60940de30fa748bb3f1c1c43f884e10' => __DIR__ . '/../..' . '/includes/functions/AjaxFunctions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'AffiliateX\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'AffiliateX\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc70b9e69ee523b08c58fd4770eaf15f3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc70b9e69ee523b08c58fd4770eaf15f3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc70b9e69ee523b08c58fd4770eaf15f3::$classMap;

        }, null, ClassLoader::class);
    }
}
