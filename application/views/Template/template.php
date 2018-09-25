<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
    <title>Ma page</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
</head>
<body>

<header>Ceci est le header</header>

<div>
    <!-- La vue s'affichera ici -->
    <?php echo $page;
    echo base_url() . "css/style.css" ?>
</div>

<footer>Ceci est le footer</footer>
<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. </p>
<a href="<?php echo site_url('') ?>"> Vous pouves cliquer ici pour revenir a l'accueil</a>
</body>
</html>