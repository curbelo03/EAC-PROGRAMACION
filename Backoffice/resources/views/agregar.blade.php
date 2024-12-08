<h2>Agregar Post</h2>
<h2>
        <a href="/">Inicio</a>
    </h2>
<form action="/cafes" method="post">
    @csrf
    Autor: <input type="text" name="Autor"> <br>
    Título: <input type="text" name="Titulo"> <br>
    Contenido: <input type="text" name="Contenido"> <br>
    <input type="submit" value="Agregar">
</form>

@if(session('mensaje'))
    @if(session('resultado') === true)
        <h2 style="color: green">¡Éxito!</h2>
    @endif
    <p>{{ session('mensaje') }}</p>
@endif
