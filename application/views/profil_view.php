<h1> Page Profil </h1>

<p>Voilà la page profil.</p>

<p>Ici se trouve les infos concernant l'utilisateur connecté, s'il est admin il a plus d'options, etc..</p>

<h3> Informations du compte</h3>
<table class="table table-striped">
  <?php
echo "<tr><th scope=\"row\">Nom d'utilisateur : </th><td>" . $username . "</td><td><button type=\"button\" class=\"btn btn-outline-dark\">Modifier</button></td></tr>"
. "<tr><th scope=\"row\">Email : </th><td>" . $email . "</td><td><button type=\"button\" class=\"btn btn-outline-dark\">Modifier</button></td></tr>";
?>
</table>
<?php
$d = new DateTime($date_inscription);
echo "<p>Compte créé le " . $d->format("d-m-Y") . " .</p>"?>

  <h3>Informations personnelles</h3>
  <table class="table table-striped">
  <?php
echo "<tr><th scope=\"row\">Nom : </th><td>" . $nom . "</td><td><button type=\"button\" class=\"btn btn-outline-dark\">Modifier</button></td></tr>"
    . "<tr><th scope=\"row\">Prénom : </th><td>" . $prenom . "</td><td><button type=\"button\" class=\"btn btn-outline-dark\">Modifier</button></td></tr>"
    . "<tr><th scope=\"row\">Adresse : </th><td>" . $code_postal . " " . $ville ."\n".$ligne_adresse."</td><td><button type=\"button\" class=\"btn btn-outline-dark\">Modifier</button></td></tr>";
?>
  </table>

<?php if($this->session->userdata('superadmin')){
    echo '<h4 style="color:red;">Vous avez un compte administrateur</h4>';
} ?>

<?php  //TEMPLATE TEXTE POUR LA MODIFICATION NE PAS DELETE
/*
 echo "<tr><th scope=\"row\">Email : </th><td>";
 echo form_open('Test/modification');
 echo "<input type=\"text\" name=\"email\" value=\"".$email."\">";
 echo "</td><td><button type=\"submit\" class=\"btn btn-dark\">Accepter</button></td></tr>";
 echo form_close();*/

 ?>