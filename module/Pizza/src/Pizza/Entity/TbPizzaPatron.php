<?php

namespace Pizza\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/** @ORM\Table(name="tb_pizza_patron") 
 * @ORM\Entity(repositoryClass="Pizza\Repository\Repository") */

class TbPizzaPatron
{  
    /**
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer", length=11)
    */
    protected $id;

    /** @ORM\Column(type="string", length=255) */
    protected $nom;
    
    /**
     * @var integer
     * @ORM\ManyToOne(targetEntity="TbBases")
     * @ORM\JoinColumn(name="base", referencedColumnName="id")
     */
    protected $base;
    
    /** @ORM\Column(type="boolean", length=1) */
    protected $pizofday;
    
    /** @ORM\Column(type="boolean", length=1) */
    protected $pizza_au_menu;
    
    /** @ORM\Column(type="float") */
    protected $prix;
    
    /** @ORM\Column(type="string", length=255) */
    protected $url_img;
    
    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function getBase() {
        return $this->base;
    }

    function getPizofday() {
        return $this->pizofday;
    }

    function getPizza_au_menu() {
        return $this->pizza_au_menu;
    }

    function getPrix() {
        return $this->prix;
    }

    function getUrl_img() {
        return $this->url_img;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setBase($base) {
        $this->base = $base;
    }

    function setPizofday($pizofday) {
        $this->pizofday = $pizofday;
    }

    function setPizza_au_menu($pizza_au_menu) {
        $this->pizza_au_menu = $pizza_au_menu;
    }

    function setPrix($prix) {
        $this->prix = $prix;
    }

    function setUrl_img($url_img) {
        $this->url_img = $url_img;
    }
    
     
}

