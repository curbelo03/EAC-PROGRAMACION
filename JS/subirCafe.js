$(document).ready(function() {
    $("#btnCrearCafe").click(function() {
        var autor = $("#autor").val();
        var titulo = $("#titulo").val();
        var contenido = $("#contenido").val();

        var data = {
            "Autor": autor,
            "Titulo": titulo,
            "Contenido": contenido
        };

        $.ajax({
            url: 'http://localhost:8000/api/cafe',
            type: 'POST',
            headers: {
                "Accept": "application/json" 
            },
            data: data
        });
    });
});
