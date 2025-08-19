<?php
require_once 'product/clothes.php';
// var_dump($clothes);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Lien vers Bootstrap -->
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css" />

    <!-- Lien vers Materialize -->
    <!-- <link rel="stylesheet" href="../../node_modules/materialize-css/dist/css/materialize.min.css" /> -->

    <!-- Compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->

    <!-- Pour les icones Materialize -->
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->

    <!-- Lien vers les icônes Bootstrap -->
    <link rel="stylesheet" href="../../node_modules/bootstrap-icons/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="d-flex justify-content-center">
        <h1><b>Détails de l'article</b></h1>
    </div>
    <div class="div-article-details m-3 p-3">
        <div class="d-flex justify-content-center fs-3">
            <p><b><?= $clothes[$_GET['id'] - 1]['type'] ?></b></p>
        </div>
        <div class="d-flex justify-content-center">
            <img class="taille-img-details text-center" src="assets/img/<?= $clothes[
                $_GET['id'] - 1
            ]['main'] ?>" alt="assets/img/<?= $clothes[$_GET['id'] - 1][
    'main'
] ?>">
        </div>
        <div class="d-block text-center mt-2">
            <p><b><?= $clothes[$_GET['id'] - 1]['name'] ?></b></p>
            <p>Genre : <?= $clothes[$_GET['id'] - 1]['gender'] ?></p>
            <p>Taille : <?= $clothes[$_GET['id'] - 1]['size'] ?></p>
            <p>Prix : <b><?= $clothes[$_GET['id'] - 1]['price'] ?> €</b></p>
        </div>
    </div>
</body>
</html>