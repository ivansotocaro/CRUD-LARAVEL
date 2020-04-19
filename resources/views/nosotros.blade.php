@extends('plantilla')

@section('seccion')

<h1>NOSOTROS</h1>

@foreach($persona as $person)
 <a href="{{ route('nosotros', $person) }} " class="h3 text-center text-info" >{{$person}}</a><br/>
@endforeach

@if(!empty($nombre))

    @switch($nombre)

        @case($nombre == 'ivan')

       <h4 class="mt-5">{{$nombre}} Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, delectus ea laborum aut ducimus illum corporis tempore aliquid ad. Voluptas sequi facere, praesentium quaerat in eius consequuntur consectetur nulla velit. </h4> 

        @break

        
        @case($nombre == 'soto')

       <h4 class="mt-5">{{$nombre}} Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, delectus ea laborum aut ducimus illum corporis tempore aliquid ad. Voluptas sequi facere, praesentium quaerat in eius consequuntur consectetur nulla velit. </h4> 

        @break

        
        @case($nombre == 'caro')

       <h4 class="mt-5">{{$nombre}} Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, delectus ea laborum aut ducimus illum corporis tempore aliquid ad. Voluptas sequi facere, praesentium quaerat in eius consequuntur consectetur nulla velit. </h4> 

        @break

    @endswitch

@endif


@endsection