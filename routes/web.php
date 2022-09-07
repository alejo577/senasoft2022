<?php

use App\Models\Sondeo;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// ruta de inicio

Route::get('/index', function () {
    return view('vistas.inicio');
})->name('index');


//ruta afrodesendiente
Route::get('/afro', function () {
    return view('vistas.afro');
})->name('afro');


//ruta lgbt
Route::get('/lgbti', function () {
    return view('vistas.lgbt');
})->name('lgbt');


//ruta lgbt
Route::get('/lndigenas', function () {
    return view('vistas.indigenas');
})->name('indigenas');

//ruta lgbt
Route::get('/urbanas', function () {
    return view('vistas.urbanas');
})->name('urbanas');






//ruta funcional de busquedas

Route::get('/consultar', function(Request $request){

    $busqueda=$request::input('consultar');
    $consultas=Sondeo::select('Tema','Pregunta','Poblacion')
    ->where('Tema','LIKE','%'.$busqueda.'%')
    ->orwhere('Poblacion','LIKE','%'.$busqueda.'%');
    return view("consultas.busquedas",compact("consultas"));


    })->name('consultar');


