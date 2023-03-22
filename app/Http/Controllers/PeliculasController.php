<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;

class PeliculasController extends Controller
{
    public function home() {
        $peliculas = Pelicula::all();

        $argumentos = array();
        $argumentos['peliculas'] = $peliculas;

        return view('home',$argumentos);
    }

    public function administrarPeliculas() {
        $peliculas = Pelicula::all();

        $argumentos = array();
        $argumentos['peliculas'] = $peliculas;

        return view('administrarPeliculas',$argumentos);
    }
}
