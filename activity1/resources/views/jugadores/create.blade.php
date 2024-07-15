<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h1>Crear Jugador</h1>
        <form action="{{route('jugadores.store')}}"  method="POST" >       
            @csrf
            <label for="nombre">Nombre:</label>
            <br>
        <input type="text" name="nombre" id="nombre" >
        <br>
            </label>
            <br>
            <label for="fecha_nac">Fecha de Nacimiento:</label>
            <br>
        <input type="date" name="fecha_nac" id="fecha_nac" >
        <br>
            </label>
            <br>
            <label for="posicion">Posición:</label>
            <br>
            <input type="text" name="posicion" id="posicion" >       
         <br>

            <br>
            <button type="submit">Guardar</button>
        </form>
    
    </body>
    </html>