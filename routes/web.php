<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PersonaxlController;
use App\Http\Controllers\ResondeosController;
use App\Http\Controllers\SondeoController;
use App\Models\Respuestasondeo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
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
//olvidar sesion del administrador
Route::get('old', function() {
    Session::forget('sesionadmin');
    echo "<script>alert('inicie sesion');window.location = 'loginadmin'</script>";
})->name('old');
// olvidar sesion del usuario
Route::get('oldusu', function() {
    Session::forget('sesionusuario');
    echo "<script>alert('inicie sesion');window.location = 'login'</script>";
})->name('oldusu');




//responder sondeos

Route::get('resondeos', function () {
    $todosondeos=Sondeo::all();
    return view('resondeos',compact('todosondeos'));
})->name('resondeos');

//responder sondeos controlador

Route::post('res',[ResondeosController::class,'store'])->name('res');

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
//registro del administrador
Route::get('registroadmin', function () {
    return view('registroadmin');
})->name('registroadmin');
//login del administrador
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
//login del administrador
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


//ruta indigenas
Route::get('/lndigenas', function () {
    return view('vistas.indigenas');
})->name('indigenas');

//ruta urbanas
Route::get('/urbanas', function () {
    return view('vistas.urbanas');
})->name('urbanas');



//ruta funcional de busquedas

Route::get('/busquedas', function(Request $request){

    $busqueda=$request->input('consultar');
    $consultas=Sondeo::select('Tema','Pregunta','Poblacion')
    ->where('Tema','LIKE','%'.$busqueda.'%')
    ->orwhere('Poblacion','LIKE','%'.$busqueda.'%');
    return view("consultas.busquedas",compact("consultas"));
    })->name('sdjhagasykdjh');

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


Route::get('/busqueda2', function (Request $request) {

    $buscar = $request->input('buscar');
    $consulta = Sondeo::all()
    ->where('Tema','LIKE',$buscar);


    return view('busqueda2',compact('consulta'));
})->name('busqueda2');


Route::get('olvidaradmin', function() {
    Session::forget('sesionadmin');
    echo "<script>alert('inicie sesion');window.location = 'loginadmin'</script>";
})->name('olvidaradmin');



Route::get('olvidarusuario', function() {
    Session::forget('sesionusuario');
    echo "<script>alert('inicie sesion');window.location = 'login'</script>";
})->name('olvidarusuario');

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
        $todosondeos=Sondeo::all();
        return view('vistasadmin.resultados');
    })->name('resultados');

      //ruta de generador de resultados
    Route::get('/estadisticas', function () {
        return view('vistasadmin.generar_estadisticas');
    })->name('estadisticas');
    //foros
