 @if(session('modificado'))
        <b>Pizza modificada</b> <br>
    @endif
<h2>Modificar Cafe</h2>

<form action="/cafes/{{ $cafe->id }}/modificar" method="post">
    @csrf
    Id <input type="text" disabled name="id" value="{{ $cafe->id }}"> <br>
    Autor <input type="text" name="Autor" value="{{ $cafe->Autor }}"> <br>
    Titulo <input type="text" name="Titulo" value="{{ $cafe->Titulo }}"> <br>
    Contenido <input type="text" name="Contenido" value="{{ $cafe->Contenido }}"> <br>
    <input type="submit" value="Modificar">
</form>