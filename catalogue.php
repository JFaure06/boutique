<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 31/01/19
 * Time: 13:35
 */
session_start();
require 'Include/functions.php';
include_once 'Include/database_WSFIA.php';
include_once 'Include/function_Database.php';

$db = MaConnexion();
$catalogue = GetProduits($db);

include 'Header.php';
?>

<main>
    <div class="container-fluid">
        <form method="post" action="panier_2.php">
            <input type="hidden" name="ajoutPanier">
            <div class="row">

                <?php

                foreach ($catalogue as $articles) {

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


