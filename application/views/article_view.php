<?php
/**
 * Created by PhpStorm.
 * User: Lorenzo
 * Date: 12/03/2019
 * Time: 14:48
 */
?>
<?php
//var_dump($article);
?>

<p><?php echo $article->nom ?></p>
<p><?php echo $article->marque ?></p>
<p><?php echo $article->reference ?></p>
<p><?php echo $article->date_sortie ?></p>
<p><?php echo $article->type ?></p>
<p><?php echo $article->prix ?></p>
<div class="btn-group btn-group-toggle" data-toggle="buttons">
    <?php for ($i = 0; $i < count($article->tailles); $i++) {
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
<p><?php echo $article->couleur ?></p>
<button type="button" class="btn btn-outline-dark">Acheter</button>
<?php
//var_dump($article);
/*for($i =0; $i< count($article->tailles);$i++) {
                    if($article->tailles[$i] != 0)
                        echo '<span>'.$article->tailles{$i}.'</span>';
                    else
                        echo '<span>Unique</span>';
                }*/ ?>
<br>
