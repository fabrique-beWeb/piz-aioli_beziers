<?php

namespace Pizza\model;

class Listepizza {

    public $id;
    public $nom;
    public $url_img;
    public $ingredient_1;
    public $ingredient_2;
    public $ingredient_3;
    public $ingredient_4;
    public $ingredient_5;
    public $ingredient_6;
    public $base;
    public $pizza_au_menu;
    public $prix;


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
        
        if (isset($data['ingredient_1'])) {
            $this->ingredient_1 = $data['ingredient_1'];
        }
        
        if (isset($data['ingredient_2'])) {
            $this->ingredient_2 = $data['ingredient_2'];
        }
        
        if (isset($data['ingredient_3'])) {
            $this->ingredient_3 = $data['ingredient_3'];
        }
        
        if (isset($data['ingredient_4'])) {
            $this->ingredient_4 = $data['ingredient_4'];
        }
        
        if (isset($data['ingredient_5'])) {
            $this->ingredient_5 = $data['ingredient_5'];
        }
        
        if (isset($data['ingredient_6'])) {
            $this->ingredient_6 = $data['ingredient_6'];
        }
        
        if (isset($data['base'])) {
            $this->base = $data['base'];
        }
        
        if (isset($data['pizza_au_menu'])) {
            $this->pizza_au_menu = $data['pizza_au_menu'];
        }
        
        if (isset($data['prix'])) {
            $this->prix = $data['prix'];
        }
        

    }

}
