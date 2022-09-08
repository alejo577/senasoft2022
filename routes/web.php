<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Models\Sondeo;



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


//ruta indigenas
Route::get('/lndigenas', function () {
    return view('vistas.indigenas');
})->name('indigenas');

//ruta urbanas
Route::get('/urbanas', function () {
    return view('vistas.urbanas');
})->name('urbanas');



//ruta funcional de busquedas

Route::get('consultar', function (Request $request) {
    $consultas=$request->input('buscar');

if(isset($consultas)){

    $busqueda=Sondeo::select('id','Tema','Poblacion')
    ->where('Tema','LIKE', '%' .$consultas.'%')
    ->orwhere('Poblacion' ,'LIKE', '%' .$consultas.'%')
->paginate(12);

if(count($busqueda)<=0){
    echo "<script>alert('Sondeo No encontrado');window.location='index'</script>";
}
return view('consultas.busquedas',compact('busqueda'));
}else{


    echo "<script>alert('inserte dato a buscar');window.location='index'</script>";
}


})->name('consultar');
//cierre consulta



//ubicacion de sondeos

//sondeo de poblacion indigena




//mostrar sondeos en vista indigenas



Route::get('indigenas', function () {

    $indigena=Sondeo::all()->where('Poblacion','indigena')
   ->take(12);


     return view('vistas.indigenas',compact('indigena'));

})->name('indigenas');


//mostrar sondeos de vista poblaciones urbanas

Route::get('urbanas', function () {

    $urbana=Sondeo::all()->where('Poblacion','urbana')
   ->take(12);


     return view('vistas.urbanas',compact('urbana'));

})->name('urbanas');


//mostrar sondeos de vista poblaciones lgbti

Route::get('lgbti', function () {

    $lgbt=Sondeo::all()->where('Poblacion','lgbt')
   ->take(12);


     return view('vistas.lgbt',compact('lgbt'));

})->name('lgbt');



//mostrar sondeos vistas afrodecendientes

Route::get('afro', function () {

    $afro=Sondeo::all()->where('Poblacion','afrodescendiente')
   ->take(12);


     return view('vistas.afro',compact('afro'));

})->name('afro');



//mostrar sondeos vista index
Route::get('index', function () {

    $general=Sondeo::all()->where('Poblacion','general')
   ->take(12);


     return view('vistas.inicio',compact('general'));

})->name('index');

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

    //foros
