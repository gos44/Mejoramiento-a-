<!DOCTYPE html>
<html>
<head>
    <title>Detalles del Jugador</title>
</head>
<body>
    <h1>Detalles del Jugador</h1>
    <p>ID: {{ $jugador->id }}</p>
    <p>Nombre: {{ $jugador->nombre }}</p>
    <p>Fecha de Nacimiento: {{ $jugador->fecha_nac }}</p>
    <p>Posición: {{ $jugador->posicion }}</p>
    <a href="{{ route('jugadores.index') }}">Volver</a>
</body>
</html>
