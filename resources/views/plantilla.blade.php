<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>
    
    <div class="container mt-5">
        <a href="{{ route('foto') }}" class="btn btn-danger">Fotos</a>
        <a href="{{ route('blog') }}" class="btn btn-primary">Blog</a>
        <a href="{{ route('nosotros') }}" class="btn btn-success">Nosotros</a>
    </div>

 <div class="container">
    @yield('seccion')
 </div>

    <div class="container bg-dark text-white text-center">Footer</div>

</body>
</html>