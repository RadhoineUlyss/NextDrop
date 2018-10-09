/*$('td > .btn').click(function () {
    var parent = $(this).parent().parent();
    var titre = parent.children().eq(0);
    var valeur = parent.children().eq(1);
    parent.html("<form method=\"post\" id=\"info_compte\">"
        + "<th scope=\"row\">" + titre.text() + "</th>"
        + "<td><input type=\"text\" form=\"info_compte\" name=\""+$(this).attr('id')+"\" value=\"" + valeur.text() + "\"></td>"
        + "<td><button id=\"validate\" type=\"submit\" form=\"info_compte\" class=\"btn btn-dark\">Accepter</button></td>"
        + "</form>");
});*/

$('td > .btn').click(function () {
    var parent = $(this).parent().parent();
    var titre = parent.children().eq(0);
    var valeur = parent.children().eq(1);
    parent.html("<form method=\"post\" id=\"info_compte\">"
        + "<th scope=\"row\">" + titre.text() + "</th>"
        + "<td><input id=\"nom\" type=\"text\" form=\"info_compte\" name=\"" + $(this).attr('id') + "\" value=\"" + valeur.text() + "\"></td>"
        + "<td><button id=\"validate\" type=\"submit\" form=\"info_compte\" class=\"btn btn-dark\">Accepter</button></td>"
        + "</form>");



    $('#validate').click(function () {
        var nom = $('#nom').val();
        $.ajax({
            url: location.origin + "/profil/modifier", // La ressource ciblée
            type: 'POST',
            data: { nom: nom },
            success: function () { // success est toujours en place, bien sûr !
                console.log("succes");
            },

            error: function (erreur) {
                console.log(location.origin + "/profil/modifier");
                console.log(this.data);
                console.log(erreur);
            }
        });

    });
});