$('td > .btn').click(function () {
    var parent = $(this).parent().parent();
    var titre = parent.children().eq(0);
    var valeur = parent.children().eq(1);
    parent.html("<form method=\"post\" action=\"profil/modifier/"+$(this).attr('id')+"\" id=\"info_compte\">"
        + "<th scope=\"row\">" + titre.text() + "</th>"
        + "<td><input type=\"text\" form=\"info_compte\" name=\""+$(this).attr('id')+"\" value=\"" + valeur.text() + "\"></td>"
        + "<td><button type=\"submit\" form=\"info_compte\" class=\"btn btn-dark\">Accepter</button></td>"
        + "</form>");
});