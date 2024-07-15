<!DOCTYPE html>
<html>
<head>
    <title>Editar Proyecto</title>
</head>
<body>
    <h1>Editar Proyecto</h1>
    <form action="{{ route('proyectos.update', $proyecto->codigo) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="descripcion">Descripción:</label>
        <br>
        <input type="text" name="descripcion" id="descripcion" value="{{ $proyecto->descripcion }}" required>
        <br> 
        <label for="cantidad">cantidad :</label>
        <br>
        <input type="integer" name="cantidad" id="cantidad" value="{{ $proyecto->cantidad }}" required>
        <br>
        <label for="fecha_inicio">Fecha Inicio:</label>
        <br>
        <input type="date" name="fecha_inicio" id="fecha_inicio" value="{{ $proyecto->fecha_inicio }}" required>
        <br>
        <label for="fecha_fin">Fecha Fin:</label>
        <br>
        <input type="date" name="fecha_fin" id="fecha_fin" value="{{ $proyecto->fecha_fin }}">
        <br><br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
