<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Jugador</title>
</head>
<body>
    <h1>Editar Jugador</h1>

    <form action="{{ route('jugadores.update', $jugador) }}" method="POST">
        @csrf
        @method('PUT')
        <label>
            Nombre:
            <br>
            <input type="text" name="nombre" id="nombre" value="{{old("nombre", $jugador->nombre) }}" required>
        </label>
        <br><br>
        
        <label>
            Fecha de Nacimiento:
            <br>
            <input type="date" name="fecha_nac" id="fecha_nac" value="{{old ( "fecha_nac", $jugador->fecha_nac) }}" required>
        </label>
        <br><br>
        
        <label>
            Posición:
            <br>
            <input type="text" name="posicion" id="posicion" value="{{old('posicion', $jugador->posicion) }}" required>            
        </label>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>