<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 04/02/19
 * Time: 10:43
 */

include_once 'Include/database_WSFIA.php';
include_once 'Include/functions.php';
include_once 'Include/function_Database.php';


var_dump($_GET);
$produitid = $_GET['id'];

$db = MaConnexion();
$article = GetProduit2($db, $produitid);

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
<?php include 'Header.php'; ?>


<main>
<?php


            afficheArticle($article);


?>






</main>

<!--FOOTER -->
<?php include 'Footer.php'; ?>


</body>
</html>

