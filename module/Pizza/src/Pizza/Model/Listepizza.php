<?php

namespace Pizza\model;

class Listepizza {

    public $id;
    public $nom;
    public $url_img;


    public function exchangeArray($data) {

        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        
        if (isset($data['nom'])) {
            $this->nom = $data['nom'];
        }
        
        if (isset($data['url_img'])) {
            $this->url_img = $data['url_img'];
        }
        

    }

}
