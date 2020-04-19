<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;


class PagesController extends Controller
{
    public function index()
    {
        $notas = App\Nota::all();
        return view('welcome', compact('notas'));
    }


















    
    public function foto()
    {
        return view('foto');
    }

    public function blog()
    {
        return view('blog');
    }

    public function nosotros($nombre = NULL)
    {
        $persona = ['ivan', 'soto', 'caro'];

        return view('nosotros', compact('persona', 'nombre'));

    }



}
