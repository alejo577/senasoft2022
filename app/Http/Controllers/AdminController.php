<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $admin= DB::table('admins')->where('Usuario','=',$request->input('usu'))->first();

        if (isset($admin)){

            $pass = $admin->Contraseña;
            $pass2 = $request->input('pass');
            $usu = $request->input('usu');

            if (Hash::check($pass2, $pass)){

                Session::put('sesionadmin',"$usu");

                echo "<script>alert('Bienvenido {$usu}');window.location = 'x'</script>";
            }else{
                echo "<script>alert('La contraseña es incorrecta');window.location = 'loginadmin'</script>";
            }

        }else{
            echo "<script>alert('el usuario no se encuentra en la base de datos');window.location= 'loginadmin'</script>";
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
            'usu'=>'required',
            'pass'=>'required|min:10',
            'cod'=>'required'
            ],[
                'usu.required'=>'El campo de usuario es obligatorio',
                'pass.required'=>'El campo de Contraseña es Obligatorio',
                'cod.required'=>'El campo del Codigo es obligatorio',
                'pass.min'=>'el campo debe contener minimo 10 caracteres',
            ]);

        if($request->input('cod')=='1234'){

        $admin= DB::table('admins')->where('Usuario','=',$request->input('usu'))->first();
        if(isset($admin)){
            echo "<script>alert('El usuario ya existe en la base de datos');window.location = 'registroadmin'</script>";
        }else{
            $adminx = new Admin;
            $adminx->Usuario=$request->input('usu');
            $pass = hash::make($request->input('pass'));
            $adminx->Contraseña=$pass;
            $adminx->save();

            echo "<script>alert('Registrado con Exito');window.location = 'loginadmin'</script>";
        }

        }else{
            echo "<script>alert('el codigo es incorrecto');window.location = 'loginadmin'</script>";
        }




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
