<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 05/02/19
 * Time: 11:42
 */
include_once 'functions.php';
include_once 'database_WSFIA.php';
var_dump($_POST);
/* */
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

<header class="header-home">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="boutique.php"><i class="material-icons text-warning">home</i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="catalogue.php">Produits</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid mt-3 pt-5">

        <div class="row p-2 d-flex flex-column flex-md-row">

            <div class="col-md-4 container-fluid d-flex justify-content-center align-items-center order-1 order-md-1">
                <h2 class="order-3 text-info text-secondary">Waterski and French in The Alps</h2>
            </div>

            <div class="col-md-8 container-fluid d-flex justify-content-between order-2 order-md-2">
                <div>
                    <img src="photo/2b4ebdbcc4e8e39c19c1cf926e25dfbc.png" class="img-fluid" alt="logo">
                </div>
            </div>

        </div>
    </div>
</header>

<main>
    <form method="post" action="panier.php">
        <p class="mt-2">Commande :</p>
        <?php
        /*initialisation du total a 0*/
        $total = 0;
        /*une boucle qui parcours mon tableau d'articles et celui mon panier*/
        foreach ($articles as $panier) {
            /* si dans ma recherche pas clé existe j'affiche*/
            if (array_key_exists($panier["id"], $_POST)) {
                /*j'appel ma fonction*/
                articlePanier($panier);
                $quantite = "qt".$panier["id"];
                var_dump($_POST[$quantite]);
                //$total += $panier["Prix"] * $_POST["qt"];
            }

        }
        if (isset($_POST["qt"])){
            var_dump($_POST);

            die();
        }else{
            echo "wtf ";
        }
        /*if (isset($_POST) && !empty($_POST)) {
           echo ;
           }*/

        echo $total . " $";
        ?>
        <input type="submit" value="refresh" class="btn btn-dark">
    </form>


</main>

</body>
</html>