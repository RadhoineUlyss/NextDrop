<?php
/**
 *
 * @var string   $username
 * @var string   $email
 * @var          $this CI_Loader
 *
 */
?>
<div id="profilPart1">
	<div class="col-md-10">
		<h1>Mon Profil</h1>
		<hr>
	</div>
	<div class="col-md-10">
		<form method="post" action="" id="info_compte">
			<div class="form-group row">
				<label class="col-4 col-form-label">Nom d'utilisateur :</label>
				<div class="col-8">
					<p><?php echo $username ?></p>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-4 col-form-label">Email :</label>
				<div class="col-8">
					<input type="mail" name="email" placeholder="Votre email" value="<?php echo $email ?>">
				</div>
			</div>
			<div class="form-group row">
				<div id="alert_cte" class="col-4 col-form-label"></div>
				<div class="col-8">
					<button id="acc_cte" type="submit" class="btn btn-dark" disabled>Accepter les modifications</button>
				</div>
			</div>
		</form>
	</div>
</div>

<div id="profilPart2">
	<div class="col-md-10">
		<h2>Informations personnelles </h2>
		<hr>
	</div>
	<div class="col-md-10">
		<form method="post" action="" id="info_pers">
			<div class="form-group row">
				<label class="col-4 col-form-label">Nom :</label>
				<div class="col-8">
					<input type="text" name="nom" placeholder="Nom" value="<?php echo $nom ?>">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-4 col-form-label">Prénom :</label>
				<div class="col-8">
					<input type="text" name="prenom" placeholder="Prénom" value="<?php echo $prenom ?>">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-4 col-form-label">Adresse :</label>
				<div class="col-8">
				<?php echo '<input type="text" name="code_postal" placeholder="CP" value="'. $adresse->code_postal . '">' ?>
					<?php echo '<input type="text" name="ville" placeholder="Ville" value="'. $adresse->ville . '">' ?>
					<?php echo '<input type="text" name="ligne_adresse" placeholder="Ligne adresse" value="'. $adresse->ligne_adresse . '">' ?>
				</div>
			</div>
			<div class="form-group row">
				<div id="alert_pers" class="col-4 col-form-label"></div>
				<div class="col-8">
					<button id="acc_pers" type="submit" class="btn btn-dark" disabled>Accepter les modifications</button>
				</div>
			</div>
		</form>
	</div>
</div>

<?php
$d = new DateTime($date_inscription);
echo "<p>Compte créé le " . $d->format("d-m-Y") . " .</p>"
?>

<?php if ($this->getController()->isAdmin()) {
    echo '<h4 style="color:red;">Vous avez un compte administrateur</h4>';
} ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">

	$(document).ready(function (e) {

		initialise();
		
        /*$('#info_pers').on('input change', function() {

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
						initialise();
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
						initialise();
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

	function initialise()
{
    var email = $("#info_compte :input[name='email']").val();

		$('#info_compte').on('input change', function () {

			if ($("#info_compte :input[name='email']").val() != email) {
				//console.log(email + " " + $("#info_compte :input[name='email']").val());
				$('#acc_cte').attr('disabled', false);
			}
			else {
				$('#acc_cte').attr('disabled', true);
			}
		});

		var $form = $('#info_pers');
		var initialState = $form.serialize();

		$("#info_pers").on('input change', function () {
			if (initialState != $form.serialize()) {
				$('#acc_pers').attr('disabled', false);
			}
			else {
				$('#acc_pers').attr('disabled', true);
			}
		});
}


</script>


<?php //TEMPLATE TEXTE POUR LA MODIFICATION NE PAS DELETE
/*
echo "<tr><th scope=\"row\">Email : </th><td>";
echo form_open('Test/modification');
echo "<input type=\"text\" name=\"email\" value=\"".$email."\">";
echo "</td><td><button type=\"submit\" class=\"btn btn-dark\">Accepter</button></td></tr>";
echo form_close();*/
?>

