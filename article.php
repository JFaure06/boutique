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

<?php include 'Header.php'; ?>


<main>
<?php


            afficheArticle($article);


?>






</main>

<!--FOOTER -->
<?php include 'Footer.php'; ?>

