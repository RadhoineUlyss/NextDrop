<h1> Les derniers articles</h1>

<p>La liste :</p>

<?php
var_dump($sneakers);
?>

<div id="galerie" class="row text-center text-lg-left">

    <?php foreach ($sneakers as $sneack) { ?>
        <div class="articlebox col-lg-3 col-md-4 col-xs-6" style="border:1px solid black;margin: 10px;">
            <p style="text-align: center"><?php echo $sneack->nom ?> </p>
            <div>
                <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                <span>43</span>
                <span>43</span>
            </div>

        </div>
    <?php } ?>
</div>

<br>