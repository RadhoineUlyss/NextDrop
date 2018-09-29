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
</head>
 <!-- NE PAS TOUCHER EN HAUT -->
<body>

 <header>
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
          <?php echo $navbar ?>
          </div>
        </div>
      </nav>
 </header>

<div>
<?php if ($this->session->flashdata('message')) {
    echo '<div class="alert alert-success" id="success-alert">
  <button type="button" class="close" data-dismiss="alert">x</button>
  <strong>' . $this->session->flashdata('message') . '</strong>
</div>';
}?>
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
</div>
</footer>

 <!-- NE PAS TOUCHER EN BAS -->
    <!-- jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/custom/js/script.js"></script>
	<?php
if ($this->session->flashdata('error_ins')) {
    echo "<script>$('#myModal2').modal('show');</script>";
}
else if ($this->session->flashdata('error_ident')) {
    echo "<script>$('#myModal').modal('show');</script>";
}
?>
</body>
</html>