<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Respuestasondeo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResondeosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        $per= DB::table('personas')->where('NumeroDocumento','=',$request->input('doc'))->first();
        if(isset($per)){
            $sondeox = new Respuestasondeo;
            $sondeox->Pregunta=$request->input('pregunta');
            $sondeox->Respuesta=$request->input('respuesta');
            $sondeox->NumeroDocumento=$request->input('doc');
            $sondeox->save();
            echo "<script>alert('REGISTRO EXITOSO DEL SONDEO');window.location = 'index'</script>";
        }else{
            echo "<script>alert('El Numero de Documento no coincide con su cuenta');window.location = 'resondeos'</script>";
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
