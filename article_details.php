<?php include_once('header.php');
require_once('class/Article.php');
require_once('class/creationArticles.php');
$id = (int)$_GET['id'];

for($i = 0; $i<count($allArticles); $i++ ){
    if($id == $allArticles[$i]->getId()){
        $currentId = array_search($allArticles[$i], $allArticles);
    }
}

?>

<main id="contenu">


    <section id="lesposts" class="full container">
        <div class="retour">
            <a href="actualite.php"><i class="fas fa-arrow-circle-left"></i>  Retour</a>
        </div>
        <article class="post">
            <figure class="imgsize">
                <img src="<?= $allArticles[$currentId]->getImage(); ?>" alt="<?= $allArticles[$currentId]->getTitle(); ?>">
            </figure>
            <div class="text-post">
                <h2><?=$allArticles[$currentId]->getTitle(); ?></h2>
                <time datetime="<?= $allArticles[$currentId]->dateNumber(); ?>"><?= $allArticles[$currentId]->dateWritten(); ?></time>
                <p><?= $allArticles[$currentId]->getFullArticle(); ?></p>
            </div>
        </article>
        <div class="retour">
            <a href="actualite.php"><i class="fas fa-arrow-circle-left"></i>  Retour</a>
        </div>
    </section>
 

</main>

<?php include('footer.php'); ?>

