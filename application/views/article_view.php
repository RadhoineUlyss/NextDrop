<br><div id="ArticleBigDiv">
    <div id="ArticleLeftDiv">
        <img src="<?php echo base_url(); ?>assets/img/articles\SNZ700MV/01.jpg" alt="photo de l'article">
    </div>
    <div id="ArticleRightDiv">
        <h3><?php echo $article->nom ?></h3>
        <h2><?php echo $article->prix ?> €</h2>
        <h4>Tailles :</h4>
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <?php
                for ($i = 0; $i < count($article->tailles); $i++) {
                    if ($article->tailles[$i] != 0)
                        echo ' <label class="btn btn-dark">
                                <input type="radio" name="options" autocomplete="off">'
                                .$article->tailles{$i}.'
                                </label>';
                    else
                        echo '<span>Unique</span>';
                }
            ?>
        </div>
        <br>
        <button type="button" class="btn btn-outline-dark">Ajouter au panier</button>
    </div>
    <div id="ArticleBottomDiv">
        <h3>Description : </h3>
        <p>Couleur : <?php echo $article->couleur ?></p>
        <p>Marque : <?php echo $article->marque ?></p>
        <p>Référence : <?php echo $article->reference ?></p>
        <p>Date de sortie : <?php echo $article->date_sortie ?></p>
    </div>
</div>
