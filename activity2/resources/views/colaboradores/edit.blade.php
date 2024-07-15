<!DOCTYPE html>
<html>
<head>
    <title>Editar Colaborador</title>
</head>
<body>
    <h1>Editar Colaborador</h1>
    <form action="{{ route('colaboradores.update', $colaborador->nif) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre:</label>
        <br>
        <input type="text" name="nombre" id="nombre" value="{{ $colaborador->nombre }}" required>
        <br>
        <label for="nif">nif:</label>
        <br>
        <input type="intefer" name="nif" id="nif" value="{{ $colaborador->nif }}" required>
        <br><br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
