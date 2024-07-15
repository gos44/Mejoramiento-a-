<!DOCTYPE html>
<html>
<head>
    <title>Crear Colaborador</title>
</head>
<body>
    <h1>Crear Colaborador</h1>
    <form action="{{ route('colaboradores.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <br>
        <input type="text" name="nombre" id="nombre" required>
        <br>
        <label for="nif">Cuantía:</label>
        <br>
        <input type="integer" name="nif" id="nif" required>
        <br><br>
        <button type="submit">Crear</button>
    </form>
</body>
</html>
