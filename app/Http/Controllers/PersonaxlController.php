<?php

namespace App\Http\Controllers;

use App\Models\Dato;
use App\Models\Persona;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class PersonaxlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $usuario= DB::table('usuarios')->where('Correo','=',$request->input('email'))->first();

        if (isset($usuario)){

            $pass = $usuario->Contraseña;
            $pass2 = $request->input('pass');
            $email = $request->input('email');

            if (Hash::check($pass2, $pass)){

                Session::put('sesionusuario',"$email");

                echo "<script>alert('Bienvenido {$email}');window.location = 'l'</script>";
            }else{
                echo "<script>alert('La contraseña es incorrecta');window.location = 'login'</script>";
            }

        }else{
            echo "<script>alert('el correo no se encuentra en la base de datos');window.location= 'login'</script>";
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $request->validate([
        'NDoc'=>'required',

    ],[
        'NDoc.required'=>'Este Campo es Obligatorio',

    ]);

    $usuariox = new Usuario;
    $usuariox->Correo=$request->input('email');
    $pass=Hash::make($request->input('pass'));

    $usuariox->Contraseña=$pass;
    $usuariox->save();

    $personax = new Persona;
    $personax->TipoDocumento=$request->input('TDoc');
    $personax->NumeroDocumento=$request->input('NDoc');
    $personax->Nombres=$request->input('nombre');
    $personax->Apellidos=$request->input('apellido');
    $personax->Sexo=$request->input('sexo');
    $personax->TelefonoCel=$request->input('telcel');
    $personax->TelefonoFijo=$request->input('telfij');
    $personax->Correo=$request->input('email');
    $personax->Municipio=$request->input('mun');
    $personax->Direccion=$request->input('dir');
    $personax->Barrio=$request->input('barrio');
    $personax->save();

    $datosx = new Dato;
    $datosx->Fecha_Nacimiento=$request->input('fecha');
    $datosx->Etnia=$request->input('etnia');
    $datosx->Condicion_Discapacidad=$request->input('condiciondiscapacidad');
    $datosx->Estrato=$request->input('estrato');
    $datosx->Ult_Nivel_Educativo=$request->input('NivEdu');
    $datosx->Acceso_Dispositivos=$request->input('accesodisp');
    $datosx->Cuales_Dispositivos=$request->input('dispositivos');
    $datosx->Conectividad_Internet=$request->input('internet');
    $datosx->Tipo_Regimen_Afiliacion=$request->input('afiliacion');
    $datosx->save();

    echo "<script>alert('Registrado con exito');window.location = 'registro'</script>";



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
