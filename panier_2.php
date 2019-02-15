<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 14/02/19
 * Time: 13:18
 */

session_start();


include_once 'Include/functions.php';
require 'Include/function_Database.php';

$db = MaConnexion();

//Ajout un article au panier
if (isset($_POST['ajoutArticle'])) {
    foreach ($_POST['Article'] as $produitid) {
        $articleSelect = GetProduit2($produitid);
        $panierTemp = [
            'id' => $articleSelect['idArticle'],
            'img' => $articleSelect['Image'],
            'name' => $articleSelect['Nom'],
            'qte' => 1,
            'price' => $articleSelect['Prix'],
        ];
        $_SESSION['panier'][] = $panierTemp;
    }
}

include 'Header.php';
?>

<table class="table">
    <thead>
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>quantité</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($_SESSION['panier'] as $articledupanier) {
        echo '<tr>
                <td>
                    '.$articledupanier['id'].'
                </td>
                <td>
                    '.$articledupanier['name'].'
                </td>
                <td>
                    <input type="number" value="'.$articledupanier['qte'].'" >
                </td>
            </tr>';
    }
    ?>
    </tbody>
    <tfoot>
    <tr>
        <td></td>
        <td></td>
        <td>Total <?php echo number_format($total, 2, ',', ' ') ?> €</td>
    </tr>
    </tfoot>
</table>
