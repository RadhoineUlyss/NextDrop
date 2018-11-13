<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<a href="<?php echo base_url('/profil') ?>" class="btn btn-outline-success"><?php echo $this->session->userdata('login_User')['login']; ?></a>
<a href="<?php echo base_url('/test/logout') ?>" class="btn btn-outline-danger">Déconnexion</a>