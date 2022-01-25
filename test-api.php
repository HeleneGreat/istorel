<?php include ('header.php'); ?>

<main id="contenu">

<h1>API test</h1>

<form action="">
    <div class='form-group'>
        <label for="cp">Code postal</label>
        <input type="text" name="cp" id="cp"/>
    </div>
</form>

<div id="villes"></div>



<!-- ALAN -->
<p>
    <label for="adresse">Adresse <span class="asterisque">*</span></label>
    <input type="adresse" name="adresse" placeholder="Tapez votre adresse" id="adresse">
    <ul id="wrapper"></ul>
</p>

   




</main>



<?php include ('footer.php'); ?>