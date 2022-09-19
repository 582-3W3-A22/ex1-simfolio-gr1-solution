<?php 
    // Identifiant de la page.
    $page = 'accueil';
    // Inclure le fichier commun de l'entête du site.
    include('inclusions/entete.inc.php'); 
?>
    <section class="principale">
        <div>
            <h1><?= $accTitre; ?></h1>
            <h3><?= $accSousTitre; ?></h3>
            <ul>
                <li><?= $accAvantages1; ?></li>
                <li><?= $accAvantages2; ?></li>
                <li><?= $accAvantages3; ?></li>
            </ul>
        </div>
        <div>
            <img src="images/accueil.jpg" alt="">
        </div>
    </section>
<?php 
    // Inclure le fichier commun du pied de page du site.
    include('inclusions/p2p.inc.php'); 
?>
