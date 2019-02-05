<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 05/02/19
 * Time: 08:53
 */

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
            <input type="checkbox" name="case" id="case" class="container-fluid d-flex justify-align-center"/>
            <label for="case">Add to Card</label>
        </div>
    </div>

    <?php
}

?>


