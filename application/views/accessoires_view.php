<?php
#var_dump($sneakers);
?>

<!-- <div id="galerie" class="row text-center text-lg-left">

    <?php foreach ($accessoires as $accessoire) { ?>
        <div class="articlebox col-lg-3 col-md-4 col-xs-6" style="border:1px solid black;margin: 10px;">
            <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
            <p style="text-align: left"><?php echo $accessoire->nom ?> </p>
        <div>
                <?php echo  $accessoire->prix ?>
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
<div class="row">
    <div class="col-sm-6 col-lg-3 menuDiv" style="border: 1px solid black;">
        <h4>FILTRER :</h4>
        <ul>
            <li>- NIKE</li>
            <li>- ADIDAS</li>
            <li>- YEEZY</li>
        </ul>
    </div>
    <div class="col-sm-6 col-lg-3 itemDiv" style="border: 1px solid black;">
    <a href="<?php echo base_url('/accessoires/').$accessoire->reference ?>">
        <img src="<?php echo base_url(); ?>assets/img/articles/SNZ700MV/01.jpg" alt="NomAccessoire"><br>
        <span class="AccessoireName"><?php echo $accessoire->nom ?></span>
        <span class="AccessoirePrice"><?php echo $accessoire->prix ?></span>
    </a>
    </div>
    <div class="col-sm-6 col-lg-3 itemDiv" style="border: 1px solid black;"></div>
    <div class="col-sm-6 col-lg-3 itemDiv" style="border: 1px solid black;"></div>
    <div class="col-sm-6 col-lg-3 itemDiv" style="border: 1px solid black;"></div>
    <div class="col-sm-6 col-lg-3 itemDiv" style="border: 1px solid black;"></div>
    <div class="col-sm-12 col-lg-6 videoDiv" style="border: 1px solid black;">
        <video autoplay loop>
            <source src="<?php echo base_url(); ?>assets/airmax90.mp4" type="video/mp4">
        </video>
    </div>
    <div class="col-sm-6 col-lg-3 itemDiv" style="border: 1px solid black;"></div>
    <div class="col-sm-6 col-lg-3 itemDiv" style="border: 1px solid black;"></div>
    <div class="col-sm-6 col-lg-3 itemDiv" style="border: 1px solid black;"></div>
    <div class="col-sm-6 col-lg-3 itemDiv" style="border: 1px solid black;"></div>
</div>
<br>
