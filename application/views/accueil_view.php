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
            <img src="<?php echo base_url(); ?>assets/img/snearkersoftheweek.png" alt="Second slide : Catégorie Sneakers">
        </div>
        <div class="carousel-item">
            <img src="<?php echo base_url(); ?>assets/img/snearkersoftheweek.png" alt="Third slide : Catégorie Streetwear">
        </div>
        <div class="carousel-item">
            <img src="<?php echo base_url(); ?>assets/img/snearkersoftheweek.png" alt="Fourth slide : Catégorie Accessoires">
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
    <a href=""><img src="<?php echo base_url(); ?>assets/img/cate_streetwear.jpg"></a>
    <a href=""><img src="<?php echo base_url(); ?>assets/img/cate_accessoires.jpg"></a>
</div>