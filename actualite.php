<?php include('header.php'); ?>

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
        
        <article class="post tout sortie">
            <figure class="imgsize">
                <img src="images/post-sortie-kerploc.jpg" alt="Sortie à Kerploc">
            </figure>
            <div class="text-post">
                <h2>Sortie à Kerploc</h2>
                <time datetime="2021-10-31">31 octobre 2021</time>
                <p>Sortie automnale d'Istorel en presqu'île de Kerploc, sous le soleil.</p>
                <a href="article-kerploc.php">+ d'infos</a>
            </div>
        </article>

        <article class="post tout conf">
            <figure class="imgsize">
                <img src="images/post-conf-adrien.jpg" alt="Conférence au village de Saint Adrien">
            </figure>
            <div class="text-post">
                <h2>Saint-Adrien en 1820</h2>
                <time datetime="2021-10-26">26 octobre 2021</time>
                <p>La conférence s'est bien déroulée devant une assistance fournie.</p>
                <a href="article-adrien.php">+ d'infos</a>
            </div>
        </article>

        <article class="post tout patri">
            <figure class="imgsize">
                <img src="images/post-eglise-saint-pierre.jpg" alt="Eglise Saint Pierre">
            </figure>
            <div class="text-post">
                <h2>Journée du Patrimoine 2021</h2>
                <time datetime="2021-09-28">28 septembre 2021</time>
                <p>Découverte de l'église St Pierre avec Istorel lors des journées du patrimoine.</p>
                <a href="article-patrimoine21.php">+ d'infos</a>
            </div>
        </article>

        <article class="post tout patri">
            <figure class="imgsize">
                <img src="images/post-fete-nationale.jpeg" alt="Cérémonie du 14 juillet 2021">
            </figure>
            <div class="text-post">
                <h2>Fête nationale</h2>
                <time datetime="2021-07-14">14 juillet 2021</time>
                <p>Hommage national aux morts pour la France.</p>
                <a href="article-fete21.php">+ d'infos</a>
            </div>
        </article>

        <article class="post tout sortie">
            <figure class="imgsize">
                <img src="images/post-sortie-locpen.jpg" alt="Sortie à Locpen">
            </figure>
            <div class="text-post">
                <h2>Sortie à Locpen</h2>
                <time datetime="2021-06-24">24 juin 2021</time>
                <p>Pour notre sortie d'été, nous sommes allés à Pen Ker et Locpen</p>
                <a href="article-locpen.php">+ d'infos</a>
            </div>
        </article>

        <article class="post tout patri">
            <figure class="imgsize">
                <img src="images/post-iode.jpg" alt="Recherches sur l'usine d'iode">
            </figure>
            <div class="text-post">
                <h2>Recherches sur l'usine d'iode de Kerpen</h2>
                <time datetime="2021-02-06">06 février 2021</time>
                <p>Voici la restitution de nos recherches les plus récentes.</p>
                <a href="article-iode.php">+ d'infos</a>
            </div>
        </article>
    </section>
</main>

<?php include('footer.php'); ?>