<?php
/**
 * @var string   $username
 * @var string   $email
 * @var DateTime $date_inscription
 */
?>
<h1> Page Profil </h1>

<p>Voilà la page profil.</p>

<p>Ici se trouve les infos concernant l'utilisateur connecté, s'il est admin il a plus d'options, etc..</p>

<h3> Informations du compte</h3>
<form method="post" action="" id="info_compte">
    <table id="test_array" class="table table-striped">
        <tr>
            <th scope="row">Nom d'utilisateur :</th>
            <td><?php echo $username ?></td>
        </tr>
        <tr>
            <th scope="row">Email :</th>
            <td><input type="mail" name="email" value="<?php echo $email ?>"></td>
        </tr>
        <tr>
            <div id="alert_cte"></div>
            <td>
                <button id="acc_cte" type="submit" class="btn btn-dark" disabled>Accepter les modifications</button>
            </td>
        </tr>
    </table>
</form>

<?php
$d = new DateTime($date_inscription);
echo "<p>Compte créé le " . $d->format("d-m-Y") . " .</p>" ?>

<h3>Informations personnelles</h3>
<form method="post" action="" id="info_pers">
    <table class="table table-striped">
        <tr>
            <th scope="row">Nom :</th>
            <td><input type="text" name="nom" value="<?php echo $nom ?>"></td>
        </tr>
        <tr>
            <th scope="row">Prénom :</th>
            <td><input type="text" name="prenom" value="<?php echo $prenom ?>"></td>
        </tr>
        <tr>
            <th scope="row">Adresse :</th>
            <td><?php echo $code_postal . " " . $ville . " " . $ligne_adresse ?></td>
        </tr>
        <tr>
            <div id="alert_pers"></div>
            <td>
                <button id="acc_pers" type="submit" class="btn btn-dark" disabled>Accepter les modifications</button>
            </td>
        </tr>
    </table>
</form>

<?php if ($this->session->userdata('superadmin')) {
    echo '<h4 style="color:red;">Vous avez un compte administrateur</h4>';
} ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">

	$(document).ready(function (e) {
		var email = $("#info_compte :input[name='email']").val();
		$('#info_compte').on('input change', function () {

			if (($("#info_compte :input[name='email']").val() != email)) {
				console.log(email + " " + $("#info_compte :input[name='email']").val());
				$('#acc_cte').attr('disabled', false);
			}
			else {
				$('#acc_cte').attr('disabled', false);
			}
		});

		var nom    = $("#info_pers :input[name='nom']").val();
		var prenom = $("#info_pers :input[name='prenom']").val();
        /*	$('#info_pers').on('input change', function() {

         if(($("#info_compte :input[name='email']").val() != email)){
         console.log(email + " " + $("#info_compte :input[name='email']").val());
         $('#acc_cte').attr('disabled', false);
         }
         else{
         $('#acc_pers').attr('disabled', false);
         }

         });*/
		$('#info_pers').submit(function () {
			$.ajax({
				url: '<?php echo base_url() . 'profil/modifierPerso/' ?>',
				type: 'POST',
				data: $(this).serialize(),
				dataType: 'json',
				success: function (data) {
					$("#alert_pers").append('<div id="result_pers"></div>');

					if (data.status === "succes") {
						$("#result_pers").removeClass("alert-danger");
						$("#result_pers").addClass("alert alert-success");
						$("#result_pers").html('<button type="button" class="close" data-dismiss="alert">x</button>Informations personnelles modifiées');
						$("#acc_pers").attr("disabled", true);
					}
					else {
						$("#result_pers").removeClass("alert-succes");
						$("#result_pers").addClass("alert alert-danger");
						$("#result_pers").html('<button type="button" class="close" data-dismiss="alert">x</button>' + data.erreur);
						console.log(data.nom);
					}
				},
				error: function (data) {
					console.log(this.data);
				}
			});
			return false;
		});

		$('#info_compte').submit(function () {

			$.ajax({
				url: '<?php echo base_url() . 'profil/modifierCompte/' ?>',
				type: 'POST',
				data: $(this).serialize(),
				dataType: 'json',
				success: function (data) {
					$("#alert_cte").append('<div id="result_cte"></div>');

					if (data.status === "succes") {
						$("#result_cte").removeClass("alert-danger");
						$("#result_cte").addClass("alert alert-success");
						$("#result_cte").html('<button type="button" class="close" data-dismiss="alert">x</button>Informations du compte modifiées');
						$("#acc_cte").attr("disabled", true);
					}
					else {
						$("#result_cte").removeClass("alert-succes");
						$("#result_cte").addClass("alert alert-danger");
						$("#result_cte").html('<button type="button" class="close" data-dismiss="alert">x</button>' + data.erreur);
						console.log(data.nom);
					}
				},
				error: function (data) {
					console.log(this.data);
				}
			});
			return false;
		});
	});


</script>


<?php //TEMPLATE TEXTE POUR LA MODIFICATION NE PAS DELETE
/*
echo "<tr><th scope=\"row\">Email : </th><td>";
echo form_open('Test/modification');
echo "<input type=\"text\" name=\"email\" value=\"".$email."\">";
echo "</td><td><button type=\"submit\" class=\"btn btn-dark\">Accepter</button></td></tr>";
echo form_close();*/
?>

