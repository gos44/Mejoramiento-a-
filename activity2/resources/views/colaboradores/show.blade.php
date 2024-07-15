<!DOCTYPE html>
<html>
<head>
    <title>Detalles del Colaborador</title>
</head>
<body>
    <h1>Detalles del Colaborador</h1>
    <p>NIF: {{ $colaborador->id }}</p>
    <p>Nombre: {{ $colaborador->nombre }}</p>
    <p>Cuantía: {{ $colaborador->nif }}</p>
    <a href="{{ route('colaboradores.index') }}">Volver</a>
</body>
</html>
