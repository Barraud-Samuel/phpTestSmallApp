<?php
namespace App\Table;

use App\App;

class Table{

    protected static $table;

    public static function find($id){
        return static::query("SELECT * FROM ". static::$table ." WHERE id = ? ", [$id],true);
    }

    //factorisation des appels a la base, si il y a une requete preraré ou non
    public static function query($statement,$attributes = null,$one=false){
        if ($attributes){
            return App::getDb()->prepare($statement, $attributes,get_called_class(),$one);
        }else{
            return App::getDb()->query($statement,get_called_class(),$one);
        }

    }

    public static function all(){
        return App::getDb()->query("SELECT * FROM ". static::$table ."",get_called_class());
    }

    public function __get($key)
    {
        //pour les fonction url et extrait, appel autolatiquement les fonction getUrl et getExtrait //ucfirst = majpremier caractere
        $method = 'get'.ucfirst($key);
        //stockage de la methode en variable d'instance
        $this->$key = $this->$method();
        return $this->$key;
    }

}