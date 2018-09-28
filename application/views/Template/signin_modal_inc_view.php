<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div>
<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">		
				<h4 class="modal-title">Connection</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
			
            <?php echo form_open('Test/connection');?>
            <?php if(isset($error_ident))echo $error_ident; ?>
					<div class="form-group">
					<?php echo form_error('username','<span class="error">','</span>');?>
						<input type="text" class="form-control" name="username" placeholder="Nom d'utilisateur" value="<?php echo set_value('username');?>" required="required">		
					</div>
					<div class="form-group">
					<?php echo form_error('password','<span class="error">','</span>');?>
						<input type="password" class="form-control" name="password" placeholder="Mot de passe" required="required">	
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
						<input type="text" class="form-control" name="nom" placeholder="Nom"* required>	
                    </div>   
                    <div class="form-group">
					<?php echo form_error('prenom','<span class="error">','</span>');?>
						<input type="text" class="form-control" name="prenom" placeholder="Prénom" required>	
                    </div> 
                    <div class="form-group">
					<?php echo form_error('email','<span class="error">','</span>');?>
						<input type="email" class="form-control" name="email" placeholder="Email" required>	
					</div>  
					<div class="form-group">
					<?php echo form_error('username','<span class="error">','</span>');?>
						<input type="text" class="form-control" name="username" placeholder="Nom d'utilisateur" required>		
					</div>
					<div class="form-group">
					<?php echo form_error('password','<span class="error">','</span>');?>
						<input type="password" class="form-control" name="password" placeholder="Mot de passe" required>	
					</div>        
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-lg btn-block login-btn">S'inscrire</button>
					</div>
			<?php echo form_close();?>
			</div>
		</div>
	</div>
</div>   
</div>