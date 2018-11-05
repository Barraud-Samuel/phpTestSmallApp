<?php

namespace App\table;

class Article{

    public function __get($key)
    {
        //pour les fonction url et extrait, appel autolatiquement les fonction getUrl et getExtrait //ucfirst = majpremier caractere
        $method = 'get'.ucfirst($key);
        //stockage de la methode en variable d'instance
        $this->$key = $this->$method();
        return $this->$key;
    }

    public function getUrl(){
        return'index.php?p=article&id='.$this->id;
    }

    public function getExtrait(){
        //on met en forme l'extrait
        $html = '<p>'. substr($this->contenu,0,250) .'[...]</p>';
        $html .= '<p><a href="'. $this->getUrl().'">Voir la suite</a></p>';
        return $html;
    }
}