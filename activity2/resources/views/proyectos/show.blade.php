<!DOCTYPE html>
<html>
<head>
    <title>Detalles del Proyecto</title>
</head>
<body>
    <h1>Detalles del Proyecto</h1>
    <p>ID: {{ $proyecto->id }}</p>
    <p>Descripción: {{ $proyecto->descripcion }}</p>
    <p>Cantidad : {{ $proyecto->cantidad }}</p>
    <p>Fecha Inicio: {{ $proyecto->fecha_inicio }}</p>
    <p>Fecha Fin: {{ $proyecto->fecha_fin }}</p>
    <a href="{{ route('proyectos.index') }}">Volver</a>
</body>
</html>
