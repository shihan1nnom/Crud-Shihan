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
            <div class="col-md-4 mt-5">
                <form action="{{route('usuario.guardar')}}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="nombres">Nombres:</label>
                        <input type="text" name="nombres" id="nombres" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="apellidos">Apellidos:</label>
                        <input type="text" name="apellidos" id="apellidos" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Correo electronico:</label>
                        <input type="text" name="email" id="email" class="form-control">
                    </div>

                    <hr>
                    <button class="btn btn-primary" type="submit">Guardar Usuarios</button>
                    <a href="{{route('usuario.index')}}" class="btn btn-outline-primary" style="margin-left:70px">Cancelar</a>
                </form>    
            </div>
        </div>
    </div>
</body>
</html>
