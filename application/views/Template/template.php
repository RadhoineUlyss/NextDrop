<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NEXTDROP - Page d'accueil</title>
    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/custom/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Font -->
    <link type="text/css" href="http://fonts.googleapis.com/css?family=Lato:300,700"/>
    <!-- FavIcon -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url(); ?>assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url(); ?>assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url(); ?>assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url(); ?>assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url(); ?>assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo base_url(); ?>assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url(); ?>assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo base_url(); ?>assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo base_url(); ?>assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <?php
    if ($style != '') {
        echo "<link rel=\"stylesheet\" href=" . base_url() . "assets/custom/css/" . $style . ".css>";
    }
    ?>
</head>
<!-- NE PAS TOUCHER EN HAUT -->
<body>
<header>
    <!-- LA BARRE DE NAVIGATION DEBUT -->
    <script>let base_url ="<?php echo base_url() ?>"</script>
    <nav class="navbar navbar-expand-sm justify-content-center">
        <div class="d-flex flex-row-reverse">
            <?php echo form_open('','class="form-inline md-form form-sm mt-0"') ?>
                <span><i class="fas fa-search"></i></span>
                <input id="searchbar" name="search" class="form-control-sm" type="text" placeholder="Recherche" aria-label="Search">
            <?php echo form_close() ?>
        </div>
        <div id="listeItemSearch" style="display: none;"></div>
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo base_url('') ?>"><img id="logotop" src="<?php echo base_url(); ?>assets/img/Logo_nextdrop_noir.png"></a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="d-flex flex-row-reverse">
                <?php echo $navbar ?> <!-- $navbar correspond aux boutons présents à droite de la barre (ex : Se connecter ) -->
            </div>
        </div>
    </nav>
    <?php
    if ($this->session->flashdata('message')) {
        echo '<div class="alert alert-success" id="success-alert">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>' . $this->session->flashdata('message') . '</strong>
                </div>';
    }
    if ($this->session->flashdata('message_error')) {
        echo '<div class="alert alert-warning" id="error-alert">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>' . $this->session->flashdata('message_error') . '</strong>
                </div>';
    }
    ?>
    <div id="navigation">
        <ul>
            <li><a href="<?php echo base_url('/sneakers') ?>" class="">SNEAKERS</a></li>
            <li><a href="<?php echo base_url('/streetwear') ?>" class="">STREETWEAR</a></li>
            <li><a href="<?php echo base_url('/accessoires') ?>" class="">ACCESSOIRES</a></li>
            <li><a href="<?php echo base_url('/aboutus') ?>" class="">ABOUT US</a></li>
            <li><a href="<?php echo base_url('/contact') ?>" class="">CONTACT</a></li>
            <?php
            if ($this->getController()->isAdmin()) {
                echo  "<li><a href=\"".base_url('/admin')."\" class='adm'>ADMIN</a></li>";
            }
            ?>
        </ul>
    </div>
    <!-- LA BARRE DE NAVIGATION FIN -->
</header>
<div>
    <?php
    if (isset($formulaire)) {
        echo $formulaire;
    }
    ?>
    <!-- LA VUE DYNAMIQUE COMMENCE ICI -->
    <br/>
    <div class="container"><?php echo $page; ?></div>
</div>

<!-- Footer -->
<footer class="page-footer font-small unique-color-dark prem_footer">

    <div style="background-color: #2F2F2F;">
        <div class="container">

            <!-- Grid row-->
            <div class="row py-4 d-flex align-items-center fix">

                <!-- Grid column -->
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    <h6 class="mb-0 whiteicon mgleft">Connectez-vous avec nous sur les réseaux sociaux !</h6>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6 col-lg-7 text-center text-md-right">

                    <!-- Facebook -->
                    <a class="fb-ic" href="#"> <i class="fab fa-facebook"> </i> </a>
                    <!-- Twitter -->
                    <a class="tw-ic" href="#"> <i class="fab fa-twitter"></i> </i> </a>
                    <!--Instagram-->
                    <a class="ins-ic" href="#"> <i class="fab fa-instagram"> </i> </a>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row-->

        </div>
    </div>

    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-5">

        <!-- Grid row -->
        <div class="row mt-3 fix">

            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                <!-- Content -->
                <h6 class="text-uppercase font-weight-bold">NextDrop</h6>
                <p>Votre fournisseur d'articles de Streetwear rares.</p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Catégories</h6>
                <p class="footerSecText">
                    <a href="<?php echo base_url('/sneakers') ?>">SNEAKERS</a>
                </p>
                <p class="footerSecText">
                    <a href="#!">STREETWEAR</a>
                </p>
                <p class="footerSecText">
                    <a href="#!">ACCESSOIRES</a>
                </p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Liens utiles</h6>
                <p class="footerSecText">
                    <a href="#!">VOTRE COMPTE</a>
                </p>
                <p class="footerSecText">
                    <a href="#!">A PROPOS</a>
                </p>
                <p class="footerSecText">
                    <a href="#!">CONTACT</a>
                </p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Contact</h6>
                <p>
                    <i class="fa fa-home mr-3"></i> Aix-En-Provence 13090 FR</p>
                <p>
                    <i class="fa fa-envelope mr-3"></i> hello@nextdrop.com</p>
                <p>
                    <i class="fa fa-phone mr-3"></i> + 33 11 11 11 11</p>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 sec_footer">© 2019 Copyright: <a href="<?php echo base_url('') ?>"> NextDrop.fr</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->
<!-- NE PAS TOUCHER EN BAS -->
<!-- jQuery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Bootstrap JS-->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</script><script src="<?php echo base_url(); ?>assets/custom/js/async_research.js"></script>
<script type="text/javascript"> 
    <!--TODO: Faire en sorte que la fonction se relance -->
    var divHeight;
    var divWidth;
    var obj = document.getElementsByClassName('videoDiv')[0];
    if(obj.offsetHeight) {divHeight=obj.offsetHeight;} else if(obj.style.pixelHeight){divHeight=obj.style.pixelHeight;}
    if(obj.offsetWidth) {divWidth=obj.offsetWidth;} else if(obj.style.pixelWidth){divWidth=obj.style.pixelWidth;}
    var allvideos = document.getElementsByTagName("video")[0];
    allvideos.style.height = divHeight * 0.97 + "px";
    allvideos.style.width = divWidth * 0.97 + "px";
    // var allvideosdos = document.getElementsByTagName("video")[1];
    // allvideosdos.style.height = divHeight + "px";
    // allvideosdos.style.width = divWidth + "px";
</script>

<?php
if ($script != '') {
    echo "<script src=\"" . base_url() . "assets/custom/js/" . $script . ".js\"></script>";
}
?>

<?php
if ($this->session->flashdata('error_ins')) {
    echo "<script>$('#myModal2').modal('show');</script>";
} else {
    if ($this->session->flashdata('error_ident')) {
        echo "<script>$('#myModal').modal('show');</script>";
    }
}
?>
</body>
</html>