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
            <li class="nav-item active">
              <a class="nav-link" href="#">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Page 1</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Page 2</a>
            </li>
          </ul>
          <div>
          <a href="#myModal2" class="btn btn-outline-info" data-toggle="modal">S'inscrire</a>
          <a href="#myModal" class="btn btn-outline-success" data-toggle="modal">Se connecter</a>
          </div>
        </div>
      </nav>
 </header>

<div>

    <!-- LA VUE DYNAMIQUE COMMENCE ICI -->

<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">		
				<h4 class="modal-title">Connection</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
			<?php echo form_open('Test/connection');?>
					<div class="form-group">
					<?php echo form_error('username','<span class="error">','</span>');?>
						<input type="text" class="form-control" name="username" placeholder="Nom d'utilisateur" value="<?php echo set_value('username');?>" required="required">		
					</div>
					<div class="form-group">
					<?php echo form_error('password','<span class="error">','</span>');?>
						<input type="password" class="form-control" name="password" placeholder="Mot de passe" value="<?php echo set_value('username');?>" required="required">	
					</div>        
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Se connecter</button>
					</div>
			<?php echo form_close();?>
			</div>
			<div class="modal-footer">
				<a href="#">Mot de passe oublié ?</a>
			</div>
		</div>
	</div>
</div>   

	<!-- Bouton Inscription HTML Pop Up Modal -->
    </div>
	
<div id="myModal2" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">		
				<h4 class="modal-title">Inscription</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
			<?php echo form_open('Test/inscription');?>
                    <div class="form-group">
					<?php echo form_error('nom','<span class="error">','</span>');?>
						<input type="text" class="form-control" name="nom" placeholder="Nom" value="<?php echo set_value('nom');?>" required>	
                    </div>   
                    <div class="form-group">
					<?php echo form_error('prenom','<span class="error">','</span>');?>
						<input type="text" class="form-control" name="prenom" placeholder="Prénom" value="<?php echo set_value('prenom');?>" required>	
                    </div> 
                    <div class="form-group">
					<?php echo form_error('email','<span class="error">','</span>');?>
						<input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo set_value('email');?>" required>	
					</div>  
					<div class="form-group">
					<?php echo form_error('username','<span class="error">','</span>');?>
						<input type="text" class="form-control" name="username" placeholder="Nom d'utilisateur" value="<?php echo set_value('username');?>" required>		
					</div>
					<div class="form-group">
					<?php echo form_error('password','<span class="error">','</span>');?>
						<input type="password" class="form-control" name="password" placeholder="Mot de passe" value="<?php echo set_value('password');?>" required>	
					</div>        
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-lg btn-block login-btn">S'inscrire</button>
					</div>
			<?php echo form_close();?>
			</div>
		</div>
	</div>
</div>   

    <!-- La vue s'affichera ici -->
    <?php echo $page; ?>
</div>

<footer class="footer">
<div>
<div class="prem_footer">
        <p>Ceci est le footer.</p>
        <p>Page rendered in <strong>{elapsed_time}</strong> seconds.</p>
<a href="<?php echo base_url('test/') ?>"> Vous pouves cliquer ici pour revenir a l'accueil</a>
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
	<?php if($register_script == true){
		echo "<script>$('#myModal2').modal('show');</script>";
	} ?>
</body>
</html>