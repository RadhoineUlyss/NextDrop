<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div>
	<div id="myModal" class="modal fade">
		<div class="modal-dialog modal-login">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Connexion</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<?php if ($this->session->flashdata('error_ident')) {
						echo '<div class="alert alert-danger" id="danger-alert"><strong>' . $this->session->flashdata('error_ident') . '</strong></div>';
					} ?>
					<?php echo form_open('Test/connection'); ?> <!-- FORMULAIRE CONNECTION DEBUT  -->
					<div class="form-group">
						<?php echo form_error('username', '<span class="error">', '</span>'); ?>
						<input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo set_value('username'); ?>" required="required">
					</div>
					<div class="form-group">
						<?php echo form_error('password', '<span class="error">', '</span>'); ?>
						<input type="password" class="form-control" name="password" placeholder="Mot de passe" required="required">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Se connecter</button>
					</div>
					<?php echo form_close(); ?> <!-- FORMULAIRE CONNECTION FIN  -->
				</div>
				<div class="modal-footer">
					<a href="#">Mot de passe oublié ?</a>
				</div>
				<br>
				<div class="modal-footer">
					<a href="#inscriptionModal" data-toggle="modal">pas encore inscrit ?</a>
				</div>


			</div>
		</div>
	</div>
	<div id="inscriptionModal" class="modal fade">
		<div class="modal-dialog modal-login">
			<div class="modal-content">
				<i style="cursor: pointer;" data-dismiss="modal" aria-label="Close" class="fas fa-chevron-left"></i>
				<div class="modal-header">
					<h4 class="modal-title">Inscription</h4>
				</div>
				<div class="modal-body">
					<?php if ($this->session->flashdata('error_ins')) {
						echo '<div class="alert alert-danger" id="danger-alert">' . $this->session->flashdata('error_ins') . '</div>';
					} ?>
					<?php echo form_open('Test/inscription'); ?> <!-- FORMULAIRE INSCRIPTION DEBUT  -->
					<div class="form-group">
						<label for="exampleFormControlSelect1">Example select</label>
						<select class="form-control" id="exampleFormControlSelect1">
							<option>User normal</option>
							<option>Pro</option>
							<option>PRO admin</option>
						</select>
					</div>
					<div class="form-group">
						<?php echo form_error('nom', '<span class="error">', '</span>'); ?>
						<input type="text" class="form-control" name="nom" placeholder="Nom" value="<?php echo set_value('nom'); ?>" required>
					</div>
					<div class="form-group">
						<?php echo form_error('prenom', '<span class="error">', '</span>'); ?>
						<input type="text" class="form-control" name="prenom" placeholder="Prénom" value="<?php echo set_value('prenom'); ?>" required>
					</div>
					<div class="form-group">
						<?php echo form_error('email', '<span class="error">', '</span>'); ?>
						<input type="email" class="form-control" name="email" placeholder="Email" required>
					</div>
					<div class="form-group">
						<?php echo form_error('tel', '<span class="error">', '</span>'); ?>
						<input type="text" class="form-control" name="tel" placeholder="Tel" required>
					</div>
					<div class="form-group">
						<?php echo form_error('adress', '<span class="error">', '</span>'); ?>
						<input type="text" class="form-control" name="adresse" placeholder="adresse" required>
					</div>
					<div class="form-group">
						<?php echo form_error('password', '<span class="error">', '</span>'); ?>
						<input type="password" class="form-control" name="password" placeholder="Mot de passe" required>
					</div>
					<div class="form-group">
						<?php echo form_error('password', '<span class="error">', '</span>'); ?>
						<input type="password" class="form-control" name="password" placeholder="Mot de passe verif" required="required">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-lg btn-block login-btn">S'inscrire</button>
					</div>
					<?php echo form_close(); ?> <!-- FORMULAIRE INSCRIPTION FIN  -->
				</div>
			</div>
		</div>
	</div>
</div>
</div>
