<?php

class Article {

    private int $id;
    private string $title;
    private array $created_at;
    private string $category;
    private string $accroche;
    private string $image;
    private string $url;

    function __construct(string $title, array $created_at, string $category, string $accroche, string $image, string $url){
        $this->title = $title;
        $this->created_at = $created_at;
        $this->category = $category;
        $this->accroche = $accroche;
        $this->image = $image;
        $this->url = $url;
    }

// Title
    function setTitle (string $titre){
        $this->title = $titre;
    }

    function getTitle (){
        return $this->title;
    }

// Date
    function setDate (string $date){
        $this->created_at = $date;
    }

    function getDate (){
        return $this->created_at;
    }

// Date de création en AAAA/MM/JJ pour la balise <time></time>
    function date_number(){
        $date = implode("-", $this->created_at) ;
        return $date ;
    }

// Date de création écrite en lettres 
    function date_written(){
        $mois = ["", "janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre"];
    
        return $this->created_at [2] . " " . $mois[(int)$this->created_at[1]] . " " . $this->created_at[0] ;
    }






// Catégorie
    function setCategory (string $cat){
        $this->category = $cat;
    }

    function getCategory (){
        return $this->category;
    }

// Accroche
    function setAccroche (string $accroche){
        $this->accroche = $accroche;
    }

    function getAccroche (){
        return $this->accroche;
    }

//  Image
    function setImage (string $image){
        $this->image = $image;
    }

    function getImage (){
        return "images/" . $this->image;
    }

// URL
    function setUrl (string $url){
        $this->url = $url;
    }

    function getUrl (){
        return "http://localhost/istorel/" . $this->url;
    }
    

}
