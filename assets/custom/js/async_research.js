$("#searchbar").on("click keyup", function(){
    console.log(this.value);
    if(this.value.length > 0){
        $('#listeItemSearch').show();
    }
    else{
        $('#listeItemSearch').hide();
    }
    $.ajax({
        url: base_url + "recherche",
        type:"POST",
        data: $(this).serialize(),
        dataType: "json",
        success: function(data){
            console.log(data);
            $('#listeItemSearch').empty();
            if(data.length != 0) {
                data.forEach(function(item){
                    $('#listeItemSearch').append("<div>" + item.nom + "<div/>");
                })
            }
            else{
                $('#listeItemSearch').append("<div>Aucun article ne correspond<div/>");
            }
        }
    })
});
