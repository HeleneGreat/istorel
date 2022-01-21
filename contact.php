<?php include('header.php'); ?>
<main id="contenu">

<!-- Header de la page -->
    <header id="bandeau-couleur">
        <div id="bandeau-contact">
            <h2 class="container">Nous contacter</h2>
            <h3 class="container">Prenez contact avec nous pour toute demande d'information, d'aide à la recherche ou pour nous donner votre avis. Nos membres vous répondrons avec enthousiasme ! </h3>
        </div>
    </header>
    


    <div id="contact" class="container">
        
        <div id="message">
            <h4>Formulaire de contact</h4>
            <form action="envoyerform.php" method="post">
                <div class="row-contact">
                    <div>
                        <p>Civilité :</p>
                        <p><input type="radio" name="civilite" id="civilite" value="M">
                        <label for="civilite">M.</label>
                        <input type="radio" name="civilite" id="civilite" value="Mme">
                        <label for="civilite">Mme</label></p>
                        <p><label for="nom">Votre nom : <span class="required">*</span></label></p>
                        <p><input type="text" name="nom" id="nom" placeholder="Ex: Chirac" required></p>
                        <p><label for="prenom">Votre prénom : <span class="required">*</span></label></p>
                        <p><input type="text" name="prenom" id="prenom" placeholder="Ex: Jacques" required></p>
                    </div>
                    <div>
                        <p><label for="email">Votre email :</label></p>
                        <p><input type="email" id="email" placeholder="Ex: j-chirac@correze.fr"></p>
                        <p><label for="tel">Votre n° de téléphone :</label></p>
                        <p><input type="tel" id="tel" placeholder="Ex: 02 97 33 33 33"></p>
                        <p><label for="direction">Votre adresse :</label></p>
                        <p><input type="text" id="direction" placeholder="Ex: 4 rue du pain 56100 BAUD"></p>
                    </div>
                </div>
                <p>Vous préférez être recontacté par:</p>
                <ul>
                    <li><input type="checkbox" name="reponse" id="rep-email">
                    <label for="rep-email">Email</label></li>
                    <li><input type="checkbox" name="reponse" id="rep-tel">
                    <label for="rep-tel">Téléphone</label></li>
                    <li><input type="checkbox" name="reponse" id="rep-courrier">
                    <label for="rep-courrier" class="courrier">Courrier postal</label></li>
                </ul>

                <p class="votre-message">Votre message :
                <label for="msg"></label><br>
                <textarea name="message" id="msg" placeholder="Tapez votre message"></textarea></p>
                <input type="checkbox" name="rgpd" id="rgpd" required>
                <label for="rgpd" class="rgpd"><span class="required">*</span> En cliquant sur "Envoyer", vous autorisez ce site à conserver les données personnelles transmises via ce formulaire. Aucune exploitation commerciale ne sera faite des données conservées. Voir nos <a href="#">Mentions légales</a>.</label>
                <p><input type="reset" value="Effacer" class="effacer">
                <input type="submit" value="Envoyer" class="envoyer"></p>
            </form>
        </div>
        <div id="nous-trouver">
            <h4>Adresse</h4>
            <address>
                Ancien presbytère<br>
                rue de Kervam<br>
                56268 KERPLOC
            </address>
            <h5><a href="tel:+3397363636">02 97 36 36 36</a></h5>
        </div>
        <div id="carte">
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d670.845759997396!2d-3.428392270805319!3d47.73522230067004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4810f568fe076653%3A0xf16bf264f9c4f29!2s11%20Rue%20de%20Kervam%2C%2056270%20Ploemeur!5e0!3m2!1sfr!2sfr!4v1637675443465!5m2!1sfr!2sfr" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>


</main>

<?php include('footer.php'); ?>