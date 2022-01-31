<?php
require_once('Article.php');

/*
PISTE D'AMELIORATIONS : 
- mettre une partie de l'url dans la classe Article = OK
- idem pour le chemin de l'image = OK
- nouvel attribut : corps de l'article (innerTexte pour reprendre le contenu de ma page html) -> à afficher dans la page de l'article
*/



$sortieKerploc = new Article(007, "Sortie à Kerploc", [2022, 1, 10], "sortie", "Sortie automnale d'Istorel en presqu'île de Kerploc, sous le soleil", "post-sortie-kerploc.jpg", "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus nihil asperiores magni nemo harum velit hic deleniti obcaecati. Eos, accusantium.</p>
<p>Lorem ipsum dolor sit amet.</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo ex vitae odio. Maxime et, nobis quibusdam earum dolor, commodi repudiandae ea inventore ab laudantium totam nesciunt accusamus debitis reiciendis? Doloremque minima quibusdam dolorum facilis aspernatur recusandae cupiditate dolorem totam at?</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut explicabo consequuntur reiciendis quia, ipsam cum ab. Excepturi, deleniti necessitatibus? Nam eius, maxime cupiditate repellendus impedit pariatur reiciendis. Explicabo, esse repellat quas vero qui quidem delectus quam expedita ab hic nemo adipisci? Voluptatum accusantium tempora nam!</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus nihil asperiores magni nemo harum velit hic deleniti obcaecati. Eos, accusantium.</p>
<p>Lorem ipsum dolor sit amet.</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo ex vitae odio. Maxime et, nobis quibusdam earum dolor, commodi repudiandae ea inventore ab laudantium totam nesciunt accusamus debitis reiciendis? Doloremque minima quibusdam dolorum facilis aspernatur recusandae cupiditate dolorem totam at?</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut explicabo consequuntur reiciendis quia, ipsam cum ab. Excepturi, deleniti necessitatibus? Nam eius, maxime cupiditate repellendus impedit pariatur reiciendis. Explicabo, esse repellat quas vero qui quidem delectus quam expedita ab hic nemo adipisci? Voluptatum accusantium tempora nam!</p>");

$bonneAnnee22 = new Article(006, "Bonne Année 2022", [2022, 1, 2], "", "Meilleurs voeux à toutes et à tous pour cette année 2022", "post-bonne-annee22.jfif", "Meilleurs voeux à toutes et à tous pour cette année 2022 Meilleurs voeux à toutes et à tous pour cette année 2022 Meilleurs voeux à toutes et à tous pour cette année 2022 Meilleurs voeux à toutes et à tous pour cette année 2022 Meilleurs voeux à toutes et à tous pour cette année 2022 Meilleurs voeux à toutes et à tous pour cette année 2022 !!");

$stAdrien = new Article(005, "Saint-Adrien en 1820", [2021, 12, 05], "conf", "La conférence s'est bien déroulée devant une assistance fournie", "post-conf.jpg", "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, vel! Recusandae iusto provident corrupti tempora, porro at amet enim, officia harum, nulla iure quasi distinctio voluptatibus beatae reprehenderit temporibus similique sapiente nihil impedit! Modi facilis unde dolores saepe blanditiis ea.</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus nihil asperiores magni nemo harum velit hic deleniti obcaecati. Eos, accusantium.</p>
<p>Lorem ipsum dolor sit amet.</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo ex vitae odio. Maxime et, nobis quibusdam earum dolor, commodi repudiandae ea inventore ab laudantium totam nesciunt accusamus debitis reiciendis? Doloremque minima quibusdam dolorum facilis aspernatur recusandae cupiditate dolorem totam at?</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut explicabo consequuntur reiciendis quia, ipsam cum ab. Excepturi, deleniti necessitatibus? Nam eius, maxime cupiditate repellendus impedit pariatur reiciendis. Explicabo, esse repellat quas vero qui quidem delectus quam expedita ab hic nemo adipisci? Voluptatum accusantium tempora nam!</p>");

$patrimoine21 = new Article(004, "Journée du Patrimoine", [2021, 9, 15], "patri", "Découverte de l'église St Pierre avec Istorel lors des journées du patrimoine", "post-church.jpg", "<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero rerum, praesentium dolorem ipsum accusantium dolorum cupiditate? Molestias fugit reiciendis possimus cumque corrupti obcaecati, sit molestiae, itaque consequatur officia pariatur beatae.</p>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste quam voluptatibus praesentium quibusdam perferendis, consequuntur necessitatibus fugiat eum temporibus delectus.</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus nihil asperiores magni nemo harum velit hic deleniti obcaecati. Eos, accusantium.</p>
<p>Lorem ipsum dolor sit amet.</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo ex vitae odio. Maxime et, nobis quibusdam earum dolor, commodi repudiandae ea inventore ab laudantium totam nesciunt accusamus debitis reiciendis? Doloremque minima quibusdam dolorum facilis aspernatur recusandae cupiditate dolorem totam at?</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut explicabo consequuntur reiciendis quia, ipsam cum ab. Excepturi, deleniti necessitatibus? Nam eius, maxime cupiditate repellendus impedit pariatur reiciendis. Explicabo, esse repellat quas vero qui quidem delectus quam expedita ab hic nemo adipisci? Voluptatum accusantium tempora nam!</p>");

$feteNatio21 = new Article(003, "Fête nationale", [2021, 7, 14], "patri", "Hommage national aux morts pour la France", "post-14juillet.jpg", "<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam minus architecto ex mollitia dolor veritatis aut, inventore nobis explicabo nesciunt ab debitis maiores eum amet excepturi quisquam laborum nemo velit? Porro distinctio rerum culpa ad cumque soluta aliquam iure repellat aperiam, molestiae quasi sapiente, id dignissimos dolorem similique pariatur quaerat facilis minus quis molestias atque autem veniam quidem! Natus voluptatibus enim ex inventore in sed, quas dicta animi repellendus rerum?</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus nihil asperiores magni nemo harum velit hic deleniti obcaecati. Eos, accusantium.</p>
<p>Lorem ipsum dolor sit amet.</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo ex vitae odio. Maxime et, nobis quibusdam earum dolor, commodi repudiandae ea inventore ab laudantium totam nesciunt accusamus debitis reiciendis? Doloremque minima quibusdam dolorum facilis aspernatur recusandae cupiditate dolorem totam at?</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut explicabo consequuntur reiciendis quia, ipsam cum ab. Excepturi, deleniti necessitatibus? Nam eius, maxime cupiditate repellendus impedit pariatur reiciendis. Explicabo, esse repellat quas vero qui quidem delectus quam expedita ab hic nemo adipisci? Voluptatum accusantium tempora nam!</p>");

$sortieLocpen = new Article(002, "Sortie à Locpen", [2021, 6, 21], "sortie", "Pour notre sortie d'été, nous sommes allés à Pen Ker et Locpen", "post-sortie-locpen.jpg", "<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero rerum, praesentium dolorem ipsum accusantium dolorum cupiditate? Molestias fugit reiciendis possimus cumque corrupti obcaecati, sit molestiae, itaque consequatur officia pariatur beatae.</p>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste quam voluptatibus praesentium quibusdam perferendis, consequuntur necessitatibus fugiat eum temporibus delectus.</p>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero rerum, praesentium dolorem ipsum accusantium dolorum cupiditate? Molestias fugit reiciendis possimus cumque corrupti obcaecati, sit molestiae, itaque consequatur officia pariatur beatae.</p>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste quam voluptatibus praesentium quibusdam perferendis, consequuntur necessitatibus fugiat eum temporibus delectus.</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus nihil asperiores magni nemo harum velit hic deleniti obcaecati. Eos, accusantium.</p>
<p>Lorem ipsum dolor sit amet.</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo ex vitae odio. Maxime et, nobis quibusdam earum dolor, commodi repudiandae ea inventore ab laudantium totam nesciunt accusamus debitis reiciendis? Doloremque minima quibusdam dolorum facilis aspernatur recusandae cupiditate dolorem totam at?</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut explicabo consequuntur reiciendis quia, ipsam cum ab. Excepturi, deleniti necessitatibus? Nam eius, maxime cupiditate repellendus impedit pariatur reiciendis. Explicabo, esse repellat quas vero qui quidem delectus quam expedita ab hic nemo adipisci? Voluptatum accusantium tempora nam!</p>");

$usineIode = new Article(001, "Recherches sur l'usine d'iode de Kerpen", [2021, 3, 28], "patri", "Voici la restitution de nos recherches les plus récentes", "post-iode.jpg", "<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero rerum, praesentium dolorem ipsum accusantium dolorum cupiditate? Molestias fugit reiciendis possimus cumque corrupti obcaecati, sit molestiae, itaque consequatur officia pariatur beatae.</p>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste quam voluptatibus praesentium quibusdam perferendis, consequuntur necessitatibus fugiat eum temporibus delectus.</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus nihil asperiores magni nemo harum velit hic deleniti obcaecati. Eos, accusantium.</p>
<p>Lorem ipsum dolor sit amet.</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo ex vitae odio. Maxime et, nobis quibusdam earum dolor, commodi repudiandae ea inventore ab laudantium totam nesciunt accusamus debitis reiciendis? Doloremque minima quibusdam dolorum facilis aspernatur recusandae cupiditate dolorem totam at?</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut explicabo consequuntur reiciendis quia, ipsam cum ab. Excepturi, deleniti necessitatibus? Nam eius, maxime cupiditate repellendus impedit pariatur reiciendis. Explicabo, esse repellat quas vero qui quidem delectus quam expedita ab hic nemo adipisci? Voluptatum accusantium tempora nam!</p>");


// Array containing all of the articles (add the most recent one in [0])
$allArticles = [$sortieKerploc, $bonneAnnee22 , $stAdrien, $patrimoine21, $feteNatio21, $sortieLocpen, $usineIode];
