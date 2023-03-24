<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\PeliculasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//>

Route::get('/', [PeliculasController::class,'home']);

Route::get('/administrarPeliculas', [PeliculasController::class,'administrarPeliculas']);

Route::get('/añadirProyecciones', [PeliculasController::class,'añadirProyecciones']);