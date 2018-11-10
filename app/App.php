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
    private static $title ='Mon super site';

    public static function getDb(){
        if(self::$database === null){
            self::$database = new Database(self::DB_NAME, self::DB_USER, self::DB_PASS, self::SB_HOST);
        }
        return self::$database;
    }

    public static function notFound(){
        header("HTTP/1.0 404 NOT FOUND");
        header('location:index.php?p=404');
    }

    public static function getTitle(){
        return self::$title;
    }

    public static function setTitle($title){
        self::$title = $title .' | '. self::$title;
    }

}