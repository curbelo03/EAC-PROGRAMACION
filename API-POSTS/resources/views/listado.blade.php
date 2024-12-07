<!-- resources/views/listado.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Cafés</title>
</head>
<body>
    <div>
        <h1>Listado de Cafés</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Contenido</th>
                    <th>Creado en</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cafes as $cafe)
                    <tr>
                        <td>{{ $cafe->id }}</td>
                        <td>{{ $cafe->Titulo }}</td>
                        <td>{{ $cafe->Autor }}</td>
                        <td>{{ $cafe->Contenido }}</td>
                        <td>{{ $cafe->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
