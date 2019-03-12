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
                        <input type="text" class="form-control" name="username" placeholder="Nom d'utilisateur" value="<?php echo set_value('username'); ?>" required="required">
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
                <div class="container">
                    <a href="#" data-target="#pwdModal" data-toggle="modal">Mot de passe oublié ?</a>
                </div>
            </div>
        </div>
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Inscription</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <?php if ($this->session->flashdata('error_ins')) {
                        echo '<div class="alert alert-danger" id="danger-alert">' . $this->session->flashdata('error_ins') . '</div>';
                    } ?>
                    <?php echo form_open('Test/inscription'); ?> <!-- FORMULAIRE INSCRIPTION DEBUT  -->
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
                        <?php echo form_error('username', '<span class="error">', '</span>'); ?>
                        <input type="text" class="form-control" name="username" placeholder="Nom d'utilisateur" required>
                    </div>
                    <div class="form-group">
                        <?php echo form_error('password', '<span class="error">', '</span>'); ?>
                        <input type="password" class="form-control" name="password" placeholder="Mot de passe" required>
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

<!--modal-->
<div id="pwdModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="text-center">

                                <p>Si vous avez oublié votre mot de passe, vous pouvez le réinitialiser ici.</p>
                                <div class="panel-body">
                                    <?php echo form_open('Profil/recuperationPassword') ?>
                                    <div class="form-group">
                                        <input class="form-control input-lg" placeholder="Votre adresse mail ici" name="email" type="email" required>
                                    </div>
                                    <input class="btn btn-lg btn-primary btn-block" value="Envoyer mon mot de passe" type="submit">
                                    <?php echo form_close() ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="col-md-12">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Annuler</button>
                </div>
            </div>
        </div>
    </div>
</div>