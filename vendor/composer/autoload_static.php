<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitea035a55becb45082499b45e422378a9
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitea035a55becb45082499b45e422378a9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitea035a55becb45082499b45e422378a9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
