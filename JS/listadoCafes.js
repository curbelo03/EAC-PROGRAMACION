$(document).ready(function() {
    $.get('http://localhost:8000/api/cafe', function(resultado) {
        resultado.forEach(cafe => {
            $('#cafes-lista').append(`
                <tr>
                    <td>${cafe.id}</td>
                    <td>${cafe.Titulo}</td>
                    <td>${cafe.Autor}</td>
                    <td>${cafe.Contenido}</td>
                    <td>${cafe.created_at}</td>
                </tr>
            `);
        });
    });
});