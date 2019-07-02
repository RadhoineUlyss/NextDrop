<br><div id="galerie">
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
                $max = count($accessoires);
                foreach ($accessoires as $i=>$accessoire) {
                    if($i == 1 || $i == 2 || $i == 3){ ?>
                        <div class="itemDiv">
                            <a href="<?php echo base_url('/article/').$accessoire->reference ?>">
                                <img src="<?php echo base_url(); ?>assets/img/articles/SNZ700MV/01.jpg" alt="<?php echo $accessoire->nom ?>">
                                <span class="SneakName"><?php echo $accessoire->nom ?></span><br>
                                <span class="SneakPrice"><?php echo $accessoire->prix ?>€</span>
                            </a>
                        </div>
                        <?php
                            if($i ==3){
                                echo "</div><div class=\"vidRow\">";
                            }
                    } else if($i == 4){ ?>
                        <div class="itemDiv">
                            <a href="<?php echo base_url('/article/').$accessoire->reference ?>">
                                <img src="<?php echo base_url(); ?>assets/img/articles/SNZ700MV/01.jpg" alt="<?php echo $accessoire->nom ?>">
                                <span class="SneakName"><?php echo $accessoire->nom ?></span><br>
                                <span class="SneakPrice"><?php echo $accessoire->prix ?>€</span>
                            </a>
                        </div>
                    <?php
                    }else if($i == 5){ ?>
                        <div class="itemDiv">
                            <a href="<?php echo base_url('/article/').$accessoire->reference ?>">
                                <img src="<?php echo base_url(); ?>assets/img/articles/SNZ700MV/01.jpg" alt="<?php echo $accessoire->nom ?>">
                                <span class="SneakName"><?php echo $accessoire->nom ?></span><br>
                                <span class="SneakPrice"><?php echo $accessoire->prix ?>€</span>
                            </a>
                        </div>
                        <div class="videoDiv">
                            <video autoplay muted loop>
                                <source src="<?php echo base_url(); ?>assets/airmax90.mp4" type="video/mp4">
                            </video>
                        </div>
                    <?php
                    }if($i == 6){ echo "</div><div class=\"baseRow\">";}?>
                    <?php if($i == 6 || $i == 7 || $i == 8 || $i == 9){ ?>
                        <div class="itemDiv">
                            <a href="<?php echo base_url('/article/').$accessoire->reference ?>">
                                <img src="<?php echo base_url(); ?>assets/img/articles/SNZ700MV/01.jpg" alt="<?php echo $accessoire->nom ?>">
                                <span class="SneakName"><?php echo $accessoire->nom ?></span><br>
                                <span class="SneakPrice"><?php echo $accessoire->prix ?>€</span>
                            </a>
                        </div>
                    <?php  }if($i ==9){
                        echo "</div>"; }  } ?>
    </div>
</div>