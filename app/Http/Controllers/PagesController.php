<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;


class PagesController extends Controller
{
    public function index()
    {
        $notas = App\Nota::paginate(3);
        return view('welcome', compact('notas'));
    }

    public function crear(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',

        ]);

        $notaNueva = new App\Nota;

        $notaNueva->nombre = $request->nombre;
        $notaNueva->descripcion = $request->descripcion;

        $notaNueva->save();

        return back()->with('mensaje', 'Dato guardado con exito!!');

    }


    public function actualizar($id = null)
    {
        $nota = APP\Nota::findOrfail($id);
       
        return view('actualizar', compact('nota'));
    }

    public function editar(Request $request, $id)
    {
        $notaeditar = APP\Nota::findOrfail($id);
        $notaeditar->nombre = $request->nombre;
        $notaeditar->descripcion = $request->descripcion;     
        $notaeditar->save();
       
        return view('Actualizar');

    }

    public function delete($id)
    {
        $notaeliminar = APP\Nota::findOrfail($id);
        $notaeliminar->delete();

        return back();
    }



}
