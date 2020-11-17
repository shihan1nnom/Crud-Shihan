<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Crear</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <table class="table">
                    <tr>
                        <th>Nombres</th>
                        <td>{{$usuario->nombres}}</td>
                    </tr>
                    <tr>
                        <th>Apellidos</th>
                        <td>{{$usuario->apellidos}}</td>
                    </tr>
                    <tr>
                        <th>Correo</th>
                        <td>{{$usuario->email}}</td>
                    </tr>
                </table>
                <a href="{{route('usuario.index')}}" class="btn btn-default">Volver</a>
                <a href="{{route('usuario.editar', $usuario->id)}}" class="btn btn-warning">Editar</a>
            </div>
        </div>
    </div>
</body>
</html>
