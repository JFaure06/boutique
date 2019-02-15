<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 31/01/19
 * Time: 13:35
 */
session_start();
include_once 'Include/functions.php';
include_once 'Include/database_WSFIA.php';
include_once 'Include/function_Database.php';
$db = MaConnexion();
$var = GetProduits($db);

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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body>

<!--HEADER -->
<?php include 'Header.php'; ?>

<main>
    <div class="container-fluid">
        <form method="post" action="panier.php">
            <div class="row">

                <?php

                foreach ($var as $articles) {

                    afficheCatalogue($articles);

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

<!--FOOTER -->
<?php include 'Footer.php'; ?>


</body>
</html>
