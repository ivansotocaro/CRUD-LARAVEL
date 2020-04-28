@extends('plantilla')
   
@section('seccion')

   

    <div class="row">
        <div class="col-md-6">

            <div class="container my-5">

                <div class="card">
                    
                    <div class="card-body ">

                        <h1 class="text-center mb-4">Actualizar nota</h1>

                        <form action="{{ route('edit', $nota->id) }}" method="post">
                            @method('PUT')
                            @csrf

                            @error('nombre')
                                <p class="alert alert-danger">
                                 El campos nombre es obligatorio
                                </p>
                            @enderror

                            @error('description')
                                <p class="alert alert-danger">
                                 El campos descripcion es obligatorio
                                </p>
                            @enderror


                           <input type="text" class="form-control mb-4" name="nombre" placeholder="Nombre..." 
                           value="{{ $nota->nombre }}">

                            <input type="text" class="form-control mb-4 " name="descripcion" placeholder="Descripción..."
                            value="{{ $nota->descripcion  }}">

                            <button class="btn btn-outline-primary btn-block" type="submit">Editar Nota</button>

                        </form>
                        

                    </div>
                </div>
            </div>

        </div>
    </div>

    


@endsection
