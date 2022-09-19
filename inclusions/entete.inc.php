<?php
$langue = 'fr';
if(isset($_GET['langue'])) {
    $langue = $_GET['langue'];
}
include("i18n/$langue/textes.php");
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="images/simfolio-64.png">
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:300,700|Roboto:700,400' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/styles.css">
    <title><?= $meta[$page]['titre']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $meta[$page]['desc']; ?>">
</head>
<body>
    <header>
        <div class="logo">
            <a href="index.php" title="<?= $entNavAccueilTitre; ?>"><img src="images/simfolio-64.png" alt="Simfolio" class="logo"></a>
            <h1 class="logo">Simfolio</h1>
        </div>
        <nav>
            <a href="compte.php" class="<?= $page==='compte' ? 'actif' : ''; ?>"><?= $entNavCompte; ?></a>
            <a href="#" title="<?= $entAVenir; ?>"><?= $entNavAPropos; ?></a>
        </nav>
    </header>