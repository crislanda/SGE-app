<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Participaciones</title>
</head>
<body>
    <h1>Participaciones</h1>
    <table>
        <thead>
            <tr>
                <th>Evento</th>
                <th>Organizador</th>
                <th>Rol</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($participaciones as $participacion)
                <tr>
                    <td>{{ $participacion->evento->nombre }}</td>
                    <td>{{ $participacion->organizador->nombre }} {{ $participacion->organizador->apellido }}</td>
                    <td>{{ $participacion->rol }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

