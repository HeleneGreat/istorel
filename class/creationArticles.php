<?php
require_once('Article.php');

/*
PISTE D'AMELIORATIONS : 
- mettre une partie de l'url dans la classe Article = OK
- idem pour le chemin de l'image = OK
- nouvel attribut : corps de l'article (innerTexte pour reprendre le contenu de ma page html) -> à afficher dans la page de l'article
*/



$sortieKerploc = new Article("Sortie à Kerploc", [2022, 1, 10], "sortie", "Sortie automnale d'Istorel en presqu'île de Kerploc, sous le soleil", "post-sortie-kerploc.jpg", "article-kerploc.php");

$bonneAnnee22 = new Article("Bonne Année 2022", [2022, 1, 2], "", "Meilleurs voeux à toutes et à tous pour cette année 2022", "post-bonne-annee22.jfif", "#");

$stAdrien = new Article("Saint-Adrien en 1820", [2021, 12, 05], "conf", "La conférence s'est bien déroulée devant une assistance fournie", "post-conf-adrien.jpg", "article-adrien.php");

$patrimoine21 = new Article("Journée du Patrimoine", [2021, 9, 15], "patri", "Découverte de l'église St Pierre avec Istorel lors des journées du patrimoine", "post-eglise-saint-pierre.jpg", "article-patrimoine21.php");

$feteNatio21 = new Article("Fête nationale", [2021, 7, 14], "patri", "Hommage national aux morts pour la France", "post-fete-nationale.jpeg", "article-fete21.php");

$sortieLocpen = new Article("Sortie à Locpen", [2021, 6, 21], "sortie", "Pour notre sortie d'été, nous sommes allés à Pen Ker et Locpen", "post-sortie-locpen.jpg", "article-locpen.php");

$usineIode = new Article("Recherches sur l'usine d'iode de Kerpen", [2021, 3, 28], "patri", "Voici la restitution de nos recherches les plus récentes", "post-iode.jpg", "article-iode.php");


// Array containing all of the articles (add the most recent one in [0])
$allArticles = [$sortieKerploc, $bonneAnnee22 , $stAdrien, $patrimoine21, $feteNatio21, $sortieLocpen, $usineIode];

