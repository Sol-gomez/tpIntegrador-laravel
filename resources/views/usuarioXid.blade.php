<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuario</title>
</head>
<body>
    <h1>Usuario</h1>
    <ul>
    <li>
        nombre de usuario: {{ $usuario->nombre; }}
        apellido de usuario: {{$usuario->apellido}}
        correo del usuario: {{ $usuario->correo; }}
    </li>
    </ul>
</body>
</html>