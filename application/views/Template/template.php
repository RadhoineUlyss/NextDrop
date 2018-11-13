<?php
defined('BASEPATH') or exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Page d'accueil</title>

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/custom/css/style.css">
    <?php if ($style != '') {
    echo "<link rel=\"stylesheet\" href=".base_url()."assets/custom/css/".$style.".css>";
    }?>
    
</head>
<!-- NE PAS TOUCHER EN HAUT -->
<body>

<header>
    <!-- LA BARRE DE NAVIGATION DEBUT -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="<?php echo base_url('') ?>">NextDrop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('') ?>">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('/galerie') ?>">Galerie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Page 2</a>
                </li>
            </ul>
            <div>
                <?php echo $navbar ?> <!-- $navbar correspond aux boutons présents à droite de la barre (ex : Se connecter ) -->
            </div>
        </div>
    </nav>
    <!-- LA BARRE DE NAVIGATION FIN -->
</header>

<div>
    <?php if ($this->session->flashdata('message')) {
        echo '<div class="alert alert-success" id="success-alert">
  <button type="button" class="close" data-dismiss="alert">x</button>
  <strong>' . $this->session->flashdata('message') . '</strong>
</div>';
    } ?>
    <?php if (isset($formulaire)) {
        echo $formulaire;
    }
    ?>
    <!-- LA VUE DYNAMIQUE COMMENCE ICI -->
    <div class="container"><?php echo $page; ?></div>

</div>

<footer class="footer">
<div>
<div class="prem_footer">
        <p>Ceci est le footer.</p>
        <p>Page rendered in <strong>{elapsed_time}</strong> seconds.</p>
<a href="<?php echo base_url('') ?>"> Vous pouvez cliquer ici pour revenir à l'accueil</a>
</div>
<div class="sec_footer">
NextDrop © 2018
<div id="social">
                    <a href="https://www.instagram.com/"><svg id="instagram" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"width="15px" height="15px" viewBox="0 0 169.063 169.063" style="enable-background:new 0 0 169.063 169.063;"xml:space="preserve">
                        <g>
                            <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752c17.455,0,31.656,14.201,31.656,31.655V122.407z"/>
                            <path d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z"/>
                            <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78C135.661,29.421,132.821,28.251,129.921,28.251z"/>
                        </g>
                    </svg></a>
                </div>
</div>
</footer>

<!-- NE PAS TOUCHER EN BAS -->
<!-- jQuery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Bootstrap JS-->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<?php if ($script != '') {
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