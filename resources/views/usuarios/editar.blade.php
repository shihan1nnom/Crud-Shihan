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
                <form action="{{route('usuario.actualizar', $usuario->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <table class="table">
                        <tr>
                            <th>Nombres</th>
                            <td><input type="text" name="nombres" class="form-control" value="{{$usuario->nombres}}"></td>
                        </tr>
                        <tr>
                            <th>Apellidos</th>
                            <td><input type="text" name="apellidos" class="form-control" value="{{$usuario->apellidos}}"></td>
                        </tr>
                        <tr>
                            <th>Correo electronico</th>
                            <td><input type="text" name="email" class="form-control" value="{{$usuario->email}}"></td>
                        </tr>
                    </table>
                    <a href="{{route('usuario.index')}}" class="btn btn-default">Cancelar</a>
                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                </form>  
            </div>
        </div>
    </div>
</body>
</html>
