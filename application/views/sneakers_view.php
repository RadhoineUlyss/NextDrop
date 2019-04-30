<!-- <?php foreach ($sneakers as $sneack) { ?>
    <div class="articlebox col-lg-3 col-md-4 col-xs-6" style="border:1px solid black;margin: 10px;">
        <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
        <p style="text-align: left"><?php echo $sneack->nom ?> </p>
    </div>
<?php } ?> -->

<!--<?php echo base_url("http://placehold.it/400x300"); ?>-->
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
            <?php
                $max = count($sneakers);
                foreach ($sneakers as $i=>$sneack) { ?>
                            <?php if($i < 3){ ?>
                                <div class="itemDiv">
                                    <a href="<?php echo base_url('/sneakers/').$sneack->reference ?>">
                                    <img src="<?php echo base_url(); ?>assets/img/articles/SNZ700MV/01.jpg" alt="NomSneaker">
                                    <span class="SneakName"><?php echo $sneack->nom ?></span><br>
                                    <span class="SneakPrice"><?php echo $sneack->prix ?>€</span>
                                    </a>
                                </div>
                            <?php if($i ==2)
                                echo "</div><div class=\"vidRow\">"; ?>
                            <?php } else if($i < 5){ ?>
                                <div class="itemDiv">
                                    <a href="<?php echo base_url('/sneakers/').$sneack->reference ?>">
                                    <img src="<?php echo base_url(); ?>assets/img/articles/SNZ700MV/01.jpg" alt="NomSneaker">
                                    <span class="SneakName"><?php echo $sneack->nom ?></span><br>
                                    <span class="SneakPrice"><?php echo $sneack->prix ?>€</span>
                                    </a>
                                </div>
                            <?php if($i == 4)
                                echo "<div class=\"videoDiv\"></div></div><div class=\"baseRow\">"; ?>
                            <?php } else if($i < 9){ ?>
                                <div class="itemDiv">
                                    <a href="<?php echo base_url('/sneakers/').$sneack->reference ?>">
                                    <img src="<?php echo base_url(); ?>assets/img/articles/SNZ700MV/01.jpg" alt="NomSneaker">
                                    <span class="SneakName"><?php echo $sneack->nom ?></span><br>
                                    <span class="SneakPrice"><?php echo $sneack->prix ?>€</span>
                                    </a>
                                </div>
                            <?php  if($i ==8)
                                echo "</div>"; }  } ?>


    </div>
</div>
<br>
