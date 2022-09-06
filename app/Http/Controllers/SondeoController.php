<?php

namespace App\Http\Controllers;

use App\Models\Sondeo;
use Illuminate\Http\Request;

/**
 * Class SondeoController
 * @package App\Http\Controllers
 */
class SondeoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sondeos = Sondeo::paginate();

        return view('sondeo.index', compact('sondeos'))
            ->with('i', (request()->input('page', 1) - 1) * $sondeos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sondeo = new Sondeo();
        return view('sondeo.create', compact('sondeo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Sondeo::$rules);

        $sondeo = Sondeo::create($request->all());

        return redirect()->route('sondeos.index')
            ->with('success', 'Sondeo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sondeo = Sondeo::find($id);

        return view('sondeo.show', compact('sondeo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sondeo = Sondeo::find($id);

        return view('sondeo.edit', compact('sondeo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Sondeo $sondeo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sondeo $sondeo)
    {
        request()->validate(Sondeo::$rules);

        $sondeo->update($request->all());

        return redirect()->route('sondeos.index')
            ->with('success', 'Sondeo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $sondeo = Sondeo::find($id)->delete();

        return redirect()->route('sondeos.index')
            ->with('success', 'Sondeo deleted successfully');
    }
}
