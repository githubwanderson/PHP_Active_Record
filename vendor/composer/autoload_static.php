<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb4bc0e58515716333ad01f448312f5be
{
    public static $files = array (
        'de8f626ce4baa5eca8afaf323caca700' => __DIR__ . '/../..' . '/app/helpers/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'app\\database\\activerecord\\ActiveRecord' => __DIR__ . '/../..' . '/app/database/activerecord/ActiveRecord.php',
        'app\\database\\activerecord\\Find' => __DIR__ . '/../..' . '/app/database/activerecord/Find.php',
        'app\\database\\activerecord\\Insert' => __DIR__ . '/../..' . '/app/database/activerecord/Insert.php',
        'app\\database\\activerecord\\Update' => __DIR__ . '/../..' . '/app/database/activerecord/Update.php',
        'app\\database\\connection\\Connection' => __DIR__ . '/../..' . '/app/database/connection/Connection.php',
        'app\\database\\interfaces\\ActiveRecordExecuteInterface' => __DIR__ . '/../..' . '/app/database/interfaces/ActiveRecordExecuteInterface.php',
        'app\\database\\interfaces\\ActiveRecordInterface' => __DIR__ . '/../..' . '/app/database/interfaces/ActiveRecordInterface.php',
        'app\\database\\interfaces\\InsertInterface' => __DIR__ . '/../..' . '/app/database/interfaces/InsertInterface.php',
        'app\\database\\interfaces\\UpdateInterface' => __DIR__ . '/../..' . '/app/database/interfaces/UpdateInterface.php',
        'app\\database\\models\\User' => __DIR__ . '/../..' . '/app/database/models/User.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb4bc0e58515716333ad01f448312f5be::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb4bc0e58515716333ad01f448312f5be::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb4bc0e58515716333ad01f448312f5be::$classMap;

        }, null, ClassLoader::class);
    }
}
