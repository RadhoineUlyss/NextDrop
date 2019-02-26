<h1> Les derniers articles</h1>

<p>La liste :</p>

<?php
var_dump($sneakers);
?>

<div id="galerie" class="row text-center text-lg-left">

    <?php foreach ($sneakers as $sneack) { ?>
        <div class="articlebox col-lg-3 col-md-4 col-xs-6" style="border:1px solid black;margin: 10px;">
            <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
            <p style="text-align: left"><?php echo $sneack->nom ?> </p>
            <div>
                <?php echo  $sneack->prix ?>
                <?php /*for($i =0; $i< count($sneack->tailles);$i++) {
                    if($sneack->tailles[$i] != 0)
                        echo '<span>'.$sneack->tailles{$i}.'</span>';
                    else
                        echo '<span>Unique</span>';
                }*/?>
            </div>
        </div>
    <?php } ?>
</div>

<div id="galerie" class="container">
    <div class="x1y1"></div>
    <div class="x2y1"></div>
    <div class="x3y1"></div>
    <div class="x4y1"></div>

    <div class="x1y2"></div>
    <div class="x2y2"></div>
    <div class="x3y2"></div>

    <div class="x1y3"></div>
    <div class="x2y3"></div>
    <div class="x3y3"></div>
    <div class="x4y3"></div>
</div>

<br>