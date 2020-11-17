<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Inicio</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('usuario.crear') }}" class="btn btn-primary mt-5 mb-3">Crear nuevo usuario</a>
                <table class="table table-borderes">
                    <thead>
                        <tr>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Email</th>
                            <th>Fecha creacion</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($usuarios as $usuario)
                        <tr>
                            <td>{{$usuario->nombres}}</td>
                            <td>{{$usuario->apellidos}}</td>
                            <td>{{$usuario->email}}</td>
                            <td>{{$usuario->created_at}}</td>
                            <td>
                                <form action="{{route('usuario.eliminar', $usuario->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{route('usuario.detalle', $usuario->id)}}" class="btn btn-info">Detalle</a>
                                    <a href="{{route('usuario.editar', $usuario->id)}}" class="btn btn-warning">Editar</a>
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>    
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
