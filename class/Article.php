<?php

class Article {

    private int $id;
    private string $title;
    private string $date;
    private string $accroche;
    private string $image;
    private string $url;

    function __construct(string  $title, string $accroche, string $image, string $url){
        $this->title = $title;
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
        return $this->image;
    }

// URL
    function setUrl (string $url){
        $this->url = $url;
    }

    function getUrl (){
        return $this->url;
    }
    

}


$test = new Article("Bienvenue", "Ce site est génial", "images/femmes-tricot.jpg", "https://helenegreat.alwaysdata.net/istorel/article-kerploc.php")