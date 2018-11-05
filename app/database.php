<?php
namespace App;

//slash devant pdo car PDO est pas dans le namespace App pour remonter a la racine
use \PDO;

class Database{
    private  $db_name;
    private  $db_user;
    private  $db_pass;
    private  $db_host;
    private  $pdo;

    public function __construct($db_name, $db_user="root", $db_pass="", $db_host="127.0.0.1")
    {
        $this -> $db_name = $db_name;
        $this -> $db_user = $db_user;
        $this -> $db_pass = $db_pass;
        $this -> $db_host = $db_host;
    }

    public function getPDO(){

        //condition si l'objet database a pas de propriete pdo, pour appeler la base que une seule fois
        if ($this->pdo === null){
            $pdo = new PDO('mysql:dbname=phptestsmallapp;host=127.0.0.1','root','');
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }
        return $this->pdo;
    }

    public function query($statement, $class_name){

        //au lieu de fetchobj on fetch la classe
        $req = $this->getPDO()->query($statement);
        $datas = $req->fetchAll(PDO::FETCH_CLASS, $class_name);
        return $datas;
    }

    public function prepare($statement, $attributes,$class_name,$one = false){
        $req = $this->getPDO()->prepare($statement);
        $req->execute($attributes);
        $req->setFetchMode(PDO::FETCH_CLASS,$class_name);
        if ($one){
            $datas = $req->fetch();
        }else{
            $datas = $req->fetchAll();
        }
        return $datas;
    }

}