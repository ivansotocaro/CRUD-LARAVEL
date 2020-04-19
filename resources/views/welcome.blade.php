<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>
   
    <div class="container my-4">

        <h1 class="text-center">
            NOTAS
        </h1>

        <table class="table mt-5">

            <thead class="thead-dark">
                <tr>
                <th scope="col">N°</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripción</th>
                <th scope="col">Acción</th>
                </tr>
            </thead>

            <tbody>
                
            @foreach($notas as $nota => $valor)
                <tr>
                <th scope="row">{{$valor['id']}}</th>
                <td>{{$valor['nombre']}}</td>
                <td>{{$valor['descripcion']}}</td>
                <td>
                    <a href="" type="button" class="btn btn-primary">Actualizar</a>
                    <a href="" type="button" class="btn btn-danger">Eliminar</a>
                </td>
                </tr>
            @endforeach
            </tbody>

        </table>

    </div>


</body>
</html>