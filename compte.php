<?php 
    // Identifiant de la page.
    $page = 'compte';
    // Inclure le fichier commun de l'entête du site.
    include('inclusions/entete.inc.php'); 
?>
    <section class="principale">
        <form action="javascript: return false">
            <fieldset>
                <legend><?= $comCnxOuvrir; ?></legend>
                <input type="text" placeholder="<?= $comCourriel; ?>">
                <input type="password" name="mdp" id="mdp" placeholder="<?= $comMdp; ?>">
                <input type="button" value="<?= $comCnxBtn; ?>">
            </fieldset>
            <div class="actions-compte">
                <a href="#"><?= $comMotDePasseOublie; ?></a>
                <a href="#"><?= $comNouveauCompte; ?></a>
            </div>
        </form>
    </section>
<?php 
    // Inclure le fichier commun du pied de page du site.
    include('inclusions/p2p.inc.php'); 
?>
