<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;
use App\Models\Funcion;

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

    public function añadirPeliculas() {
        $funciones = Funcion::all();

        $argumentos = array();
        $argumentos['funciones'] = $funciones;

        return view('añadirPeliculas',$argumentos);
    }

    public function editarPeliculas() {
        $funciones = Funcion::all();

        $argumentos = array();
        $argumentos['funciones'] = $funciones;

        return view('editarPeliculas',$argumentos);
    }

    public function generos() {
        $funciones = Funcion::all();

        $argumentos = array();
        $argumentos['funciones'] = $funciones;

        return view('generos',$argumentos);
    }

    public function login() {
        $funciones = Funcion::all();

        $argumentos = array();
        $argumentos['funciones'] = $funciones;

        return view('login',$argumentos);
    }
}
