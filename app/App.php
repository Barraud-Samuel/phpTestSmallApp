<?php
/**
 * Created by PhpStorm.
 * User: Pc-Sam
 * Date: 09/11/2018
 * Time: 23:41
 */
namespace App;

class app
{

    const DB_NAME = 'blog';
    const DB_USER = 'root';
    const DB_PASS = 'root';
    const SB_HOST = 'localhost';

    private static $database;

    public static function getDb(){
        if(self::$database === null){
            self::$database = new Database(self::DB_NAME, self::DB_USER, self::DB_PASS, self::SB_HOST);
        }
        return self::$database;
    }
}