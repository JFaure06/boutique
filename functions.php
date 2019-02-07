<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 05/02/19
 * Time: 08:53
 */
/* ma fonction est composé d'une card qui reçois les information de mes articles*/
function afficheArticle($article)
{

    ?>
    <div class="col-md-6">
        <div class="card text-center shadow p-3 mb-5 bg-grey rounded" style="width: 50rem;">
            <a href="article.php?id=<?php echo $article["id"]; ?>">
                <img src="<?php echo $article["url"]; ?>" class="card-img-top img-article" alt="photo_Ski">
            </a>
            <div class="card-body">
                <h3 class="card-title"><?php echo $article["Nom"]; ?></h3>
                <p class="card-text btn btn-primary"><?php echo $article["Prix"]; ?> $</p>
            </div>
            <input type="checkbox" name="<?php echo $article["id"]; ?>" id="<?php echo $article["id"]; ?>" class="container-fluid d-flex justify-align-center"/>
            <label for="case">Add to Card</label>
        </div>
    </div>

    <?php
}

?>
<?php

function articlePanier($panier)
{
    ?>

    <div class="d-flex justify-content-center">
        <div class="card text-center shadow p-3 mb-5 bg-grey rounded row" style="width: 100rem;">

                <img src="<?php echo $panier["url"]; ?>" class="card-img-top img-article" alt="photo_Ski">

            <div class="card-body">
                <h3 class="card-title"><?php echo $panier["Nom"]; ?></h3>
                <p class="card-text btn btn-primary"><?php echo $panier["Prix"]; ?> $</p>
            </div>
            <select name="qt<?php echo $panier["id"]; ?>" class="w-25">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>

            <input type="hidden" name="<?php echo $panier["id"]; ?>" id="<?php echo $panier["id"]; ?>" value="on" class="container-fluid d-flex justify-align-center"/>
        </div>
    </div>

    <?php
}
?>

<?php

function totalPanier(){
$liste = $_POST();
   $total=0;
   foreach ($liste as $panier);
   {
      $total += $panier["prix"] * $_POST["qt"];
   }
   return $total;
}

?>
