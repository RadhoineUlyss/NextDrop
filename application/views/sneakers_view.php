<?php
#var_dump($sneakers);
?>

<!-- <div id="galerie" class="row text-center text-lg-left">

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
</div> -->

<br id="brspec">
<div id="galerie">
    <div class="containersneak">
        <div class="firstRow">
            <div class="menuDiv">
                <h4>FILTRER :</h4>
                <ul>
                    <li>- NIKE</li>
                    <li>- ADIDAS</li>
                    <li>- YEEZY</li>
                </ul>
            </div>
            <div class="itemDiv"></div>
            <div class="itemDiv"></div>
            <div class="itemDiv"></div>
        </div>
        <div class="vidRow">
            <div class="itemDiv"></div>
            <div class="itemDiv"></div>
            <div class="videoDiv"></div>
        </div>
        <div class="baseRow">
            <div class="itemDiv"></div>
            <div class="itemDiv"></div>
            <div class="itemDiv"></div>
            <div class="itemDiv"></div>
        </div>
    </div>
</div>
<br>
