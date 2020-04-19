@extends('plantilla')
   
@section('seccion')

    @if(session('mensaje'))
        <div class="alert alert-success my-2">
            {{ session('mensaje') }}
        </div>
    @endif

    <div class="row">
        <div class="col-md-6">

            <div class="container my-5">

                <div class="card">
                    
                    <div class="card-body ">

                        <h1 class="text-center mb-4">Agregar nueva nota</h1>

                        <form action="{{ route('crear') }}" method="post">

                            @csrf

                            @error('nombre')
                                <p class="alert alert-danger">
                                    El campos nombre es obligatorio
                                </p>
                            @enderror

                            @error('descripcion')
                                <p class="alert alert-danger">
                                    El campos descripcion es obligatorio
                                </p>
                            @enderror

                           <input type="text" class="form-control mb-4" name="nombre" placeholder="Nombre..."
                           value="{{ old('nombre') }}">

                            <input type="text" class="form-control mb-4 " name="descripcion" placeholder="Descripción..."
                            value="{{ old('description') }}">

                            <button class="btn btn-outline-primary btn-block" type="submit">Guardar Nueva Nota</button>

                        </form>
                        

                    </div>
                </div>
            </div>

        </div>
    </div>

    


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
                
            @foreach($notas as $nota)
                <tr>
                    <th scope="row">{{$nota->id}}</th>
                    <td>{{$nota->nombre}}</td>
                    <td>{{$nota->descripcion}}</td>
                    <td>
                        <a href="{{ route('actualizar', $nota->id) }}" type="button" class="btn btn-primary">Actualizar</a>
                        
                        <form action="{{ route('eliminar', $nota->id) }}" method="post" class="d-inline">

                        @method('DELETE')
                        @csrf

                        <button class="btn btn-danger " type="submit">Eliminar</button>
                        
                        </form>

                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>

    </div>
@endsection
