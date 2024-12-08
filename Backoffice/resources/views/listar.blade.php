<h2>Posts</h2>

    <h2>
        <a href="/">Inicio</a>
    </h2>

@if(session('eliminado'))
    <b>Post eliminado</b> <br>
@endif

@if(session('modificado'))
    <b>Post modificado</b> <br>
@endif


<table>
    <tr>
        <th>Id</th>
        <th>Autor</th>
        <th>Título</th>
        <th>Contenido</th>
        <th>Fecha de Creación</th>
        <th>Acciones</th>
    </tr>
    @foreach($cafes as $cafe)
        <tr>
            <td>{{ $cafe->id }}</td>
            <td>{{ $cafe->Autor }}</td>
            <td>{{ $cafe->Titulo }}</td>
            <td>{{ $cafe->Contenido }}</td>
            <td>{{ $cafe->created_at }}</td>
            <td><a href="/cafes/{{ $cafe->id }}/eliminar">Eliminar</a></td>
            <td><a href="/cafes/{{ $cafe->id }}/modificar">Modificar</a></td>
        </tr>
    @endforeach
</table>
