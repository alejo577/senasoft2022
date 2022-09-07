<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PersonaxlController;
use App\Http\Controllers\SondeoController;
use Illuminate\Support\Facades\Auth;
use App\Models\Sondeo;
use Illuminate\Http\Request;
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

//inicio

Route::get('inicio', function () {
    return view('inicio');
})->name('inicio');

//ruta de la vista de login
Route::get('elije', function () {
    return view('elije');
})->name('elije');

//ruta de la vista de login
Route::get('login', function () {
    return view('login');
})->name('login');
//ruta de la vista del registro
Route::get('registro', function () {
    return view('registro');
})->name('registro');

Route::get('registroadmin', function () {
    return view('registroadmin');
})->name('registroadmin');

Route::get('loginadmin', function () {
    return view('loginadmin');
})->name('loginadmin');


//prueba del inicio admin
Route::get('x', function () {
    return view('x');
})->name('x');

//prueba del inicio usuario
Route::get('l', function () {
    return view('l');
})->name('l');

//devolucion de controlador del formulario de login
Route::post('lg',[PersonaxlController::class,'index'])->name('lg');
//devolucion de controlador del formulario de registro
Route::post('reg',[PersonaxlController::class,'store'])->name('reg');

//devolucion de controlador del formulario de registro dela dministrador
Route::post('regAdm',[AdminController::class,'store'])->name('regAdm');

Route::post('lgadmin',[AdminController::class,'index'])->name('lgadmin');

Route::resource('sondeos', SondeoController::class);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
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

Route::get('/busquedas', function(Request $request){

    $busqueda=$request::input('consultar');
    $consultas=Sondeo::select('Tema','Pregunta','Poblacion')
    ->where('Tema','LIKE','%'.$busqueda.'%')
    ->orwhere('Poblacion','LIKE','%'.$busqueda.'%');
    return view("consultas.busquedas",compact("consultas"));


    })->name('consultar');


Route::get('/busqueda2', function (Request $request) {

    $buscar = $request->input('buscar');
    $consulta = Sondeo::all()
    ->where('Tema','LIKE',$buscar);


    return view('busqueda2',compact('consulta'));
})->name('busqueda2');
