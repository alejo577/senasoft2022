<?php

use App\Http\Controllers\PersonaxlController;
use App\Http\Controllers\SondeoController;
use Illuminate\Support\Facades\Auth;
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

<<<<<<< HEAD


Route::get('/index', function () {
    return view('vistas.inicio');
})->name('index');

=======
//ruta de la vista de login
Route::get('login', function () {
    return view('login');
})->name('login');
//ruta de la vista del registro
Route::get('registro', function () {
    return view('registro');
})->name('registro');

//devolucion de controlador del formulario de login
Route::post('lg',[PersonaxlController::class,'index'])->name('lg');
//devolucion de controlador del formulario de registro
Route::post('reg',[PersonaxlController::class,'store'])->name('reg');

Route::resource('sondeos', SondeoController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
>>>>>>> origin/alejo
