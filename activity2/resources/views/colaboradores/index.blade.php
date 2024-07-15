<!DOCTYPE html>
<html>
<head>
    <title>Colaboradores</title>
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
    <h1>Colaboradores</h1>
    <a href="{{ route('colaboradores.create') }}">Crear Colaborador</a>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>nif</th>
                <th>Ver</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($colaboradores as $colaborador)
                <tr>
                    <td>{{ $colaborador->nif }}</td>
                    <td>{{ $colaborador->nombre }}</td>
                    <td>{{ $colaborador->nif }}</td>
                    <td><a href="{{ route('colaboradores.show', $colaborador->id) }}">Ver</a></td>
                    <td><a href="{{ route('colaboradores.edit', $colaborador->id) }}">Editar</a></td>
                    <td>
                        <form action="{{ route('colaboradores.destroy', $colaborador->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
