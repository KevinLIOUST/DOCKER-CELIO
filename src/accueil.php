<!-- Au moment où on charge la page pour l'afficher -->

<?php
// On utilise le require_once pour importer un fichier
require_once 'product/clothes.php';

// Le tableau avec tous les types de vêtements à utiliser pour comparer les types en fonction du clique sur les boutons pour afficher les vêtements en question
$allTypes = ['pantalon', 'chemise', 't-shirt', 'pull', 'sweat-shirt', 'all'];
// var_dump($clothes);
// var_dump($_GET);

// Pour mélanger les articles à chaque refresh de la page
shuffle($clothes);

// Si le type dans l'url correspond au type choisi en appuyant sur les boutons pour afficher les vêtements en question,
// alors on stocke le type dans la variable $type, et on regarde si le type n'est pas dans le tableau, si le type n'est pas dans le tableau, alors la catégorie n'existe pas.
// Sinon, $type = all.
if (isset($_GET['type'])) {
    $type = $_GET['type'];
    if (!in_array($type, $allTypes)) {
        $noFound = true;
    }
} else {
    $type = 'all';
}
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

    <!-- Lien vers le fichier pour designer le site web -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <!-- Nom de la page -->
    <h1 class="text-center"><b>Magasin de vêtements</b></h1>

    <!-- Les boutons pour afficher les vêtements en fonction de la catégorie choisi -->
    <div class="d-flex justify-content-center">
        <a class="m-4 btn btn-light taille-police-btns border-btns" href="accueil.php?type=all">Toute la collection</a>
        <a class="m-4 btn btn-light taille-police-btns border-btns" href="accueil.php?type=t-shirt">T-shirt</a>
        <a class="m-4 btn btn-light taille-police-btns border-btns" href="accueil.php?type=pantalon">Pantalon</a>
        <a class="m-4 btn btn-light taille-police-btns border-btns" href="accueil.php?type=pull">Pull</a>
        <a class="m-4 btn btn-light taille-police-btns border-btns" href="accueil.php?type=chemise">Chemise</a>
        <a class="m-4 btn btn-light taille-police-btns border-btns" href="accueil.php?type=sweat-shirt">Sweat-shirt</a>
    </div>

    <!-- Si la catégorie n'existe pas, alors on fait un message pour dire à l'utilisateur qu'elle n'existe pas. -->
    <?php if (isset($noFound)) { ?>
        <h1 class="text-center">La catégorie <b><?= $type ?></b> n'existe pas !!!!</h1>
    <?php } ?>

    <!-- Avec l'aide d'un foreach, on affiche tous les vêtements en fonction de la catégorie choisie -->
    <div class="div-produits">
        <?php foreach ($clothes as $item) { ?>
            <?php if ($item['type'] != $type && $type != 'all') {
                continue;
            } else {
                 ?>
                <div class="div-article m-3 p-3">
                    <a href="details.php?id=<?= $item['id'] ?>">
                        <img class="taille-img" src="assets/img/<?= $item[
                            'main'
                        ] ?>" alt="assets/img/<?= $item['main'] ?>">
                    </a>
                </div>
            <?php
            } ?>
        <?php } ?>
    </div>

    <script src="assets/js/script.js"></script>
</body>
</html>