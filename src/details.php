<!-- Au moment où on charge la page pour l'afficher -->

<!-- On utilise le require_once pour importer un fichier -->
<?php require_once 'product/clothes.php';
// var_dump($clothes);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Vêtements !!!!</title>

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

<!-- Nom de la page -->
    <div class="d-flex justify-content-center">
        <h1><b>Détails de l'article</b></h1>
    </div>

    <!-- Les détails de l'article en question -->

    <!-- On regarde si l'id du vêtement existe dans l'url, On affiche un message si l'id existe pas -->
    <?php if ($_GET['id'] > count($clothes)) { ?>
        <h1 class="text-center mt-2">Le vêtement avec l'id <b><?= $_GET[
            'id'
        ] ?></b> n'existe pas !!!!</h1>
    <?php } else { ?>
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
    <?php } ?>
</body>
</html>