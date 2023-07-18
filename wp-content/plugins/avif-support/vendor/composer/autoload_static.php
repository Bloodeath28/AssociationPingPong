<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd8e2728d5a7d7c9394f96b916aff7291
{
    public static $files = array (
        '638ed58a91368bb5285a08107501c361' => __DIR__ . '/../..' . '/includes/Pages/PagesBase/pagesList.php',
    );

    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'GPLSCore\\GPLS_PLUGIN_AVFSTW\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'GPLSCore\\GPLS_PLUGIN_AVFSTW\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'GPLSCore\\GPLS_PLUGIN_AVFSTW\\AvifSupport' => __DIR__ . '/../..' . '/includes/AvifSupport.php',
        'GPLSCore\\GPLS_PLUGIN_AVFSTW\\Base' => __DIR__ . '/../..' . '/includes/Base.php',
        'GPLSCore\\GPLS_PLUGIN_AVFSTW\\Core\\Core' => __DIR__ . '/../..' . '/includes/Core/Core.php',
        'GPLSCore\\GPLS_PLUGIN_AVFSTW\\Pages\\PagesBase\\AdminPage' => __DIR__ . '/../..' . '/includes/Pages/PagesBase/AdminPage.php',
        'GPLSCore\\GPLS_PLUGIN_AVFSTW\\Pages\\SettingsPage' => __DIR__ . '/../..' . '/includes/Pages/SettingsPage.php',
        'GPLSCore\\GPLS_PLUGIN_AVFSTW\\Plugin' => __DIR__ . '/../..' . '/includes/Plugin.php',
        'GPLSCore\\GPLS_PLUGIN_AVFSTW\\Utils\\GeneralUtilsTrait' => __DIR__ . '/../..' . '/includes/Utils/GeneralUtilsTrait.php',
        'GPLSCore\\GPLS_PLUGIN_AVFSTW\\Utils\\Img\\ImgUtilsTrait' => __DIR__ . '/../..' . '/includes/Utils/Img/ImgUtilsTrait.php',
        'GPLSCore\\GPLS_PLUGIN_AVFSTW\\Utils\\NoticeUtilsTrait' => __DIR__ . '/../..' . '/includes/Utils/NoticeUtilsTrait.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd8e2728d5a7d7c9394f96b916aff7291::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd8e2728d5a7d7c9394f96b916aff7291::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd8e2728d5a7d7c9394f96b916aff7291::$classMap;

        }, null, ClassLoader::class);
    }
}