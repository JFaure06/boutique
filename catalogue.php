<?php
/**
* Created by PhpStorm.
* User: julien
* Date: 31/01/19
* Time: 13:35
*/
include_once 'functions.php';
include_once 'database_WSFIA.php';

/*$articles = array("Nom" => "D3 NRG 2019",
"Prix" => 1849.99,
"url" => "photo/D3-NRG.jpg",
"desc" => "Le ski EVO est l\"évolution du ski ARC (plus large sur toute sa surface)
Cela permet d\"avoir un ski plus rapide ainsi que plus stable. 
Vous ne perdrez pas en rotation dans les virages avec ce ski a d\"avantage de concavité.
Ce ski a la caractéristique de tourner très rond, idéal pour tous les skieurs cherchant un ski performant mais pardonnant les erreurs "
);*/
?>

<!DOCTYPE html>

<html>

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Waterski and French in The Alps</title>
<link href="https://fonts.googleapis.com/css?family=Ubuntu Condensed" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
      integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
      crossorigin="anonymous">
<link rel="stylesheet" href="boutique.css">
</head>

<body>

<!--HEADER -->

<header class="header-home ">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="boutique.php"><i class="material-icons text-warning">home</i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="produits.php">Produits</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="contact.php">Contact</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container-fluid mt-5 pt-5">

    <div class="row p-2 d-flex flex-column flex-md-row">

        <div class="col-md-4 align-items-center order-1 order-md-1">
            <h2 class="text-info text-secondary">SKIS DE SLALOM</h2>
        </div>

        <div class="col-md-8 container-fluid d-flex align-items-center order-2 order-md-2">
            <p class="">Découvrez un grand choix de ski de slalom pour homme, femme et enfant. Que vous soyez
                amateur ou compétiteur, vous trouverez une large gamme de monoskis nautique parmi les plus grandes
                marques comme D3, Radar et HO.

                Notre gamme de ski de slalom de compétition 100% carbone et ultra léger.

                Vous pouvez contacter directement notre conseiller (coatch de ski nautique) qui répondra à toutes
                vos questions techniques et vous proposera un devis complet et adapté à votre gabarit, niveau et
                budget. </p>
        </div>

    </div>
</div>
</header>

<main>
<div class="container-fluid">
    <form method="post" action="panier.php">
        <div class="row">

            <?php

            foreach ($articles as $article) {

                afficheArticle($article);

                }
            ?>
        </div>
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <input type="submit" value="Add to card" class="btn btn-success">
            </div>
        </div>
    </form>
</div>
</main>

<footer class="mt-5">
<div class="footer ">
    <p class="text-center p-5">
        © Copyright 2019 KC Technology / WFIA.php. Ecommerce Software by Volusion.
    </p>
</div>
</footer>

</body>
</html>
