<?php
    defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<<<<<<< HEAD
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
=======
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
>>>>>>> Lorenzo

        <title>Page d'accueil</title>

<<<<<<< HEAD
        <!-- Bootstrap CSS-->
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/custom/css/style.css">
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
                        <?php echo $navbar ?>  <!-- $navbar correspond aux boutons présents à droite de la barre (ex : Se connecter ) -->
                    </div>
                </div>
            </nav>
            <!-- LA BARRE DE NAVIGATION FIN -->
        </header>
=======
    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/custom/css/style.css">
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
>>>>>>> Lorenzo

        <div>
            <?php if ($this->session->flashdata('message')) {
                echo '<div class="alert alert-success" id="success-alert">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>' . $this->session->flashdata('message') . '</strong>
                </div>';
                }
            ?>
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
                        <a href="https://www.instagram.com/nextdropmarseille" style="margin-right:1%;">
                            <svg id="instagram" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"width="20px" height="20px" viewBox="0 0 169.063 169.063" style="enable-background:new 0 0 169.063 169.063;"xml:space="preserve">
                                <g>
                                    <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752c17.455,0,31.656,14.201,31.656,31.655V122.407z"/>
                                    <path d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z"/>
                                    <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78C135.661,29.421,132.821,28.251,129.921,28.251z"/>
                                </g>
                            </svg>
                        </a>
                        <a href="https://twitter.com">
                            <svg viewBox="0 -47 512.00004 512" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" style="margin-right:1%;">
                                <path d="m512 55.964844c-32.207031 1.484375-31.503906 1.363281-35.144531 1.667968l19.074219-54.472656s-59.539063 21.902344-74.632813 25.820313c-39.640625-35.628907-98.5625-37.203125-140.6875-11.3125-34.496094 21.207031-53.011719 57.625-46.835937 100.191406-67.136719-9.316406-123.703126-41.140625-168.363282-94.789063l-14.125-16.964843-10.554687 19.382812c-13.339844 24.492188-17.769531 52.496094-12.476563 78.851563 2.171875 10.8125 5.863282 21.125 10.976563 30.78125l-12.117188-4.695313-1.4375 20.246094c-1.457031 20.566406 5.390625 44.574219 18.320313 64.214844 3.640625 5.53125 8.328125 11.605469 14.269531 17.597656l-6.261719-.960937 7.640625 23.199218c10.042969 30.480469 30.902344 54.0625 57.972657 67.171875-27.035157 11.472657-48.875 18.792969-84.773438 30.601563l-32.84375 10.796875 30.335938 16.585937c11.566406 6.324219 52.4375 27.445313 92.820312 33.78125 89.765625 14.078125 190.832031 2.613282 258.871094-58.664062 57.308594-51.613282 76.113281-125.03125 72.207031-201.433594-.589844-11.566406 2.578125-22.605469 8.921875-31.078125 12.707031-16.964844 48.765625-66.40625 48.84375-66.519531zm-72.832031 48.550781c-10.535157 14.066406-15.8125 32.03125-14.867188 50.578125 3.941407 77.066406-17.027343 136.832031-62.328125 177.628906-52.917968 47.660156-138.273437 66.367188-234.171875 51.324219-17.367187-2.722656-35.316406-8.820313-50.171875-14.910156 30.097656-10.355469 53.339844-19.585938 90.875-37.351563l52.398438-24.800781-57.851563-3.703125c-27.710937-1.773438-50.785156-15.203125-64.96875-37.007812 7.53125-.4375 14.792969-1.65625 22.023438-3.671876l55.175781-15.367187-55.636719-13.625c-27.035156-6.621094-42.445312-22.796875-50.613281-35.203125-5.363281-8.152344-8.867188-16.503906-10.96875-24.203125 5.578125 1.496094 12.082031 2.5625 22.570312 3.601563l51.496094 5.09375-40.800781-31.828126c-29.398437-22.929687-41.179687-57.378906-32.542969-90.496093 91.75 95.164062 199.476563 88.011719 210.320313 90.527343-2.386719-23.183593-2.449219-23.238281-3.074219-25.445312-13.886719-49.089844 16.546875-74.015625 30.273438-82.453125 28.671874-17.621094 74.183593-20.277344 105.707031 8.753906 6.808593 6.265625 16.015625 8.730469 24.632812 6.589844 7.734375-1.921875 14.082031-3.957031 20.296875-6.171875l-12.9375 36.945312 16.515625.011719c-3.117187 4.179688-6.855469 9.183594-11.351562 15.183594zm0 0"/>
                            </svg>
                        </a>
                        <a href="https://facebook.com">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="20px" width="20px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
	                            <g>
                                    <path d="M452,0H60C26.916,0,0,26.916,0,60v392c0,33.084,26.916,60,60,60h392c33.084,0,60-26.916,60-60V60C512,26.916,485.084,0,452,0z M472,452c0,11.028-8.972,20-20,20H338V309h61.79L410,247h-72v-43c0-16.975,13.025-30,30-30h41v-62h-41c-50.923,0-91.978,41.25-91.978,92.174V247H216v62h60.022v163H60c-11.028,0-20-8.972-20-20V60c0-11.028,8.972-20,20-20h392c11.028,0,20,8.972,20,20V452z"/>
                                </g>
                            </svg>
                        </a>
                    </div>
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