<?php

use App\Models\Sondeo;

use Illuminate\Support\Facades\Route;

use Illuminate\http\Request;


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

//ruta urbanas
Route::get('/urbanas', function () {
    return view('vistas.urbanas');
})->name('urbanas');






//ruta funcional de busquedas

Route::get('consultar', function (Request $request) {

    $consultas=$request->input('consultar');
    $busquedasondeo=Sondeo::select('id','Tema','Pregunta','Poblacion')
    ->where('Tema','LIKE',$consultas);



return view('consultas.busquedas',compact('busquedasondeo'));

})->name('consultar');




    //rutas de administrador

//rutas pagina de inicio de administrador
    Route::get('/indexadmin', function () {
        return view('vistasadmin.inicioadmin');
    })->name('indexadmin');

//ruta de certiicados

   Route::get('/certificados', function () {
        return view('vistasadmin.generar_certificados');
    })->name('certificados');


    //ruta de generador de resultados
    Route::get('/resultados', function () {
        return view('vistasadmin.resultados');
    })->name('resultados');

      //ruta de generador de resultados
      Route::get('/estadisticas', function () {
        return view('vistasadmin.generar_estadisticas');
    })->name('estadisticas');
