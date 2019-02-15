<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 13/02/19
 * Time: 10:57
 */


function MaConnexion()
{
    $serveur = "localhost";
    $login = "julien";
    $password = "Juju26500";
    $base = "Boutique";
    $bdd = new PDO('mysql:host=localhost;dbname=Boutique;charset=utf8', 'julien', 'Juju26500')
    or die("Impossible de se connecter au serveur");
    return $bdd;
}

function GetProduits($connexionbdd)
{
    $stmt = $connexionbdd->query('select * from Article');
    $result = $stmt->fetchAll();
    return $result;

}

function GetProduit($connexionbdd, $produitid)
{
    $stmt = $connexionbdd->query('select * from Article where idArticle=' . $produitid);
    $result = $stmt->fetch();
    return $result;
}


/* fonction avec requète*/
function GetProduit2($connexionbdd, $produitid)
{
    $sql = 'select * from Article where idArticle=?';
    $stmt = $connexionbdd->prepare($sql);
    $stmt->execute([$produitid]);

    $result = $stmt->fetch();
    return $result;
}