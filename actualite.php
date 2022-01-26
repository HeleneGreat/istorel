<?php include_once('header.php'); 
// require_once('class/Article.php');
require_once('./class/creationArticles.php');
?>

<main id="contenu">

<!-- Header de la page -->
    <header id="bandeau-couleur">
        <div id="bandeau-actu">
            <h2 class="container">Nos actualités</h2>
            <h3 class="container">L'association est très active grâce à l'engagement de ses membres. Retrouvez-nous régulièrement pour de nouvelles actualités !</h3>
        </div>
    </header>


    <section id="lesposts" class="liste container">
        <header id="categories">
            <nav id="menucategories">
                <ul>
                    <li><a href="#/" id="tout">Tout</a></li>
                    <li><a href="#/" id="conf">Conférences</a></li>
                    <li><a href="#/" id="sortie">Sorties</a></li>
                    <li><a href="#/" id="patri">Patrimoine</a></li>
                </ul>
            </nav>
        </header>

<!-- Boucle sur les articles de la class Article-->
    <?php foreach($allArticles as $allArticle) {?>
        <article class="post tout <?= $allArticle->getCategory() ?>">
            <figure class="imgsize">
                <img src="<?= $allArticle->getImage() ?>" alt="<?= $allArticle->getTitle() ?>">
            </figure>
            <div class="text-post">
                <h2><?= $allArticle->getTitle() ?></h2>
                <time datetime="<?= $allArticle->dateNumber() ?>"><?= $allArticle->dateWritten() ?></time>
                <p><?= $allArticle->getAccroche() ?></p>
                <a href="<?= $allArticle->getUrl() ?>">+ d'infos</a>

            </div>
        </article>
    <?php }; ?>

    </section>
</main>

<?php include('footer.php'); ?>