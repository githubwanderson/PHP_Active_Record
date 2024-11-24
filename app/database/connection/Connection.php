<?php

namespace app\database\connection;

use PDO;
use PDOException;

class Connection 
{
    private static $pdo = null;

    public static function connect()
    {
        try {
            if(!static::$pdo){
                static::$pdo = new PDO("mysql:host=localhost;dbname=activerecord","root","");
            }
        } catch (PDOException $e) {
            var_dump($e->getMessage());
        }
    }
}