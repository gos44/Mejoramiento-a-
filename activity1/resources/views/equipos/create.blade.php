<!DOCTYPE html>
<html>
<head>
    <title>crear Equipo</title>
</head>
<body>
    <h1>Crear Equipo</h1>
    <form action="{{ route('equipos.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <br>
        <input type="text" name="nombre" id="nombre" >
        <br>
        <label for="ciudad">Ciudad:</label>
        <br>
        <input type="text" name="ciudad" id="ciudad" >
        <br>
        <label for="estadio">Estadio:</label>
        <br>
        <input type="text" name="estadio" id="estadio">
        <br>
        <label for="aforo">Aforo:</label>
        <br>
        <input type="number" name="aforo" id="aforo" >
        <br>
        <label for="ano">Año:</label>
        <br>
        <input type="date" name="ano" id="ano">
        <br><br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
