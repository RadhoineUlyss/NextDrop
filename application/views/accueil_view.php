<div id="demo" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php echo base_url(); ?>assets/img/snearkersoftheweek.png" alt="First slide : Sneakers Of The Week">
        </div>
        <div class="carousel-item">
            <a href="<?php echo base_url('/sneakers') ?>"><img src="<?php echo base_url(); ?>assets/img/sneakers_slide.png" alt="Second slide : Catégorie Sneakers"></a>
        </div>
        <div class="carousel-item">
            <a href="<?php echo base_url('/streetwear') ?>"><img src="<?php echo base_url(); ?>assets/img/streetwear_slide.png" alt="Third slide : Catégorie Streetwear"></a>
        </div>
        <div class="carousel-item">
            <a href="<?php echo base_url('/accessoires') ?>"><img src="<?php echo base_url(); ?>assets/img/accessoires_slide.png" alt="Fourth slide : Catégorie Accessoires"></a>
        </div>
    </div>
    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>
<div id="catepics">
    <a href="<?php echo base_url('/sneakers') ?>"><img src="<?php echo base_url(); ?>assets/img/cate_sneakers.jpg"></a>
    <a href="<?php echo base_url('/streetwear') ?>"><img src="<?php echo base_url(); ?>assets/img/cate_streetwear.jpg"></a>
    <a href="<?php echo base_url('/accessoires') ?>"><img src="<?php echo base_url(); ?>assets/img/cate_accessoires.jpg"></a>
</div>