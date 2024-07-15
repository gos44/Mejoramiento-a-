<!DOCTYPE html>
<html>
<head>
    <title>Crear Proyecto</title>
</head>
<body>
    <h1>Crear Proyecto</h1>
    <form action="{{ route('proyectos.store') }}" method="POST">
        @csrf
        <label for="descripcion">Descripción:</label>
        <br>
        <input type="text" name="descripcion" id="descripcion" required>
        <br>
        <label for="fecha_inicio">Fecha Inicio:</label>
        <br>
        <label for="cantidad">Fecha Inicio:</label>
        <br>
        <input type="integer" name="cantidad" id="cantidad" required>
        <br>
        <label for="fecha_fin">Fecha Fin:</label>
        <br>
        <input type="date" name="fecha_fin" id="fecha_fin">
        <br><br>
        <button type="submit">Crear</button>
    </form>
</body>
</html>
