<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar Artículos</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #350400;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            margin: 20px auto;
        }

        th, td {
            text-align: center;
            padding: 10px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        th {
            background-color: #8a0b00;
            color: white;
        }

        button {
            padding: 8px 16px;
            background-color: #ff1500;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #ff8b80;
        }

        a {
            text-decoration: none;
            color: #ff6f61;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #ff8b80;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>LISTA DE LOS ORIGENES</h1>

        <table class="custom-table">
            <tr>
                <th>ID</th>
                <th>CODIGO DE ORIGEN</th>
                <th>NOMBRE DE ORIGEN</th>
                <th>OTROS DATOS</th>
                <th>MOSTRAR</th>
                <th>EDITAR</th>
                <th>ELIMINAR</th>
            </tr>
            @foreach ($origins as $origin)
            <tr>
                <td>{{$origin->id}}</td>
                <td>{{$origin->code_origin}}</td>
                <td>{{$origin->name_origin}}</td>
                <td>{{$origin->other_dates_o}}</td>
                <td><a href="{{route('origen.show', $origin->id)}}" class="button"><i class="fas fa-eye"></i></a></td>
                <td><a href="{{ route('origen.edit', $origin->id) }}" class="button"><i class="fa-solid fa-pen"></i></a>
                </td>

                <form action="{{route('origen.destroy',$origin->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <td><button type="submit" class="trash-button"><i class="fas fa-trash-alt"></i></button></td>
                </form>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>