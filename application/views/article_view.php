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

<p>Je suis un article</p>
<p><?php echo $article->nom ?></p>
<p><?php echo $article->marque ?></p>
<p><?php echo $article->reference ?></p>
<p><?php echo $article->date_sortie ?></p>
<p><?php echo $article->type ?></p>
<p><?php echo $article->prix ?></p>
<p><?php echo $article->taille ?></p>
<p><?php echo $article->couleur ?></p>
<?php
var_dump($article);
/*for($i =0; $i< count($article->tailles);$i++) {
                    if($article->tailles[$i] != 0)
                        echo '<span>'.$article->tailles{$i}.'</span>';
                    else
                        echo '<span>Unique</span>';
                }*/?>
<button type="button" class="btn btn-outline-dark">Acheter</button>
<br>
