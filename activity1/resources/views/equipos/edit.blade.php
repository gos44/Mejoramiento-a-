<!DOCTYPE html>
<html>
<head>
    <title>Editar Equipo</title>
</head>
<body>
    <h1>Editar Equipo</h1>
    <form action="{{ route('equipos.update', $equipo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre:</label>
        <br>
        <input type="text" name="nombre" id="nombre" value="{{ $equipo->nombre }}" required>
        <br>
        <label for="ciudad">Ciudad:</label>
        <br>
        <input type="text" name="ciudad" id="ciudad" value="{{ $equipo->ciudad }}" required>
        <br>
        <label for="estadio">Estadio:</label>
        <br>
        <input type="text" name="estadio" id="estadio" value="{{ $equipo->estadio }}" required>
        <br>
        <label for="aforo">Aforo:</label>
        <br>
        <input type="number" name="aforo" id="aforo" value="{{ $equipo->aforo }}" required>
        <br>
        <label for="ano">Año:</label>
        <br>
        <input type="date" name="ano" id="ano" value="{{ $equipo->ano }}" required>
        <br><br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
