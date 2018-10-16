<h1> Page Profil </h1>

<p>Voilà la page profil.</p>

<p>Ici se trouve les infos concernant l'utilisateur connecté, s'il est admin il a plus d'options, etc..</p>

<h3> Informations du compte</h3>
<table id="test_array" class="table table-striped">
    <tr>
        <th scope="row">Nom d'utilisateur :</th>
        <td><?php echo $username ?></td>
    </tr>
    <tr>
        <th scope="row">Email :</th>
        <td><?php echo $email ?></td>
        <td>
            <button id="email" type="button" class="btn btn-outline-dark" disabled>Modifier</button>
        </td>
    </tr>
</table>
<?php
$d = new DateTime($date_inscription);
echo "<p>Compte créé le " . $d->format("d-m-Y") . " .</p>" ?>

<h3>Informations personnelles</h3>
<table class="table table-striped">
    <tr>
        <th scope="row">Nom :</th>
        <td><?php echo $nom ?></td>
        <td>
            <button id="nom" type="button" class="btn btn-outline-dark">Modifier</button>
        </td>
    </tr>
    <tr>
        <th scope="row">Prénom :</th>
        <td><?php echo $prenom ?></td>
        <td>
            <button id="prenom" type="button" class="btn btn-outline-dark">Modifier</button>
        </td>
    </tr>
    <tr>
        <th scope="row">Adresse :</th>
        <td><?php echo $code_postal . " " . $ville . " " . $ligne_adresse ?></td>
        <td>
            <button id="adresse" type="button" class="btn btn-outline-dark" disabled>Modifier</button>
        </td>
    </tr>
</table>

<?php if ($this->session->userdata('superadmin')) {
    echo '<h4 style="color:red;">Vous avez un compte administrateur</h4>';
} ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">

	$(document).ready(function (e) {
		$('td > .btn').click(function () {
			var id        = $(this).attr('id');
			var parent    = $(this).parent().parent();
			var titre     = parent.children().eq(0);
			var valeur    = parent.children().eq(1);
			var input_val = parent.children().eq(1);
			var bouton    = parent.children().eq(2);
			parent.append("<form method=\"post\" action=\"\" id=\"info_compte\">" + "</form>");
			input_val.html("<input id=\"nom\" type=\"text\" form=\"info_compte\" name=\"" + id + "\" value=\"" + valeur.text() + "\">");
			bouton.html("<td><button id=\"\" type=\"submit\" form=\"info_compte\" class=\"btn btn-dark\">Accepter</button></td>");

			$('#info_compte').submit(function () {
				$.ajax({
					url: '<?php echo base_url() . 'profil/modifier/' ?>',
					type: 'POST',
					data: $(this).serialize(),
					dataType: 'json',
					success: function (data) {
						if (data.status === "succes") {
							parent.children().eq(1).text(data.var);
							bouton.html("<button id=\"" + id + "\" type=\"button\" class=\"btn btn-outline-dark\">Modifier</button>");
							// $( "#test_array" ).load( "profil_view.php #test_array" );
						}
						else {
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

