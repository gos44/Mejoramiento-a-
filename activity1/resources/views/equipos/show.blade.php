<!DOCTYPE html>
<html>
<head>
    <title>Detalles del Equipo</title>
</head>
<body>
    <h1>Detalles del Equipo</h1>
    <p>ID: {{ $equipo->id }}</p>
    <p>Nombre: {{ $equipo->nombre }}</p>
    <p>Ciudad: {{ $equipo->ciudad }}</p>
    <p>Estadio: {{ $equipo->estadio }}</p>
    <p>Aforo: {{ $equipo->aforo }}</p>
    <p>Año: {{ $equipo->ano }}</p>
    <a href="{{ route('equipos.index') }}">Volver</a>
</body>
</html>
