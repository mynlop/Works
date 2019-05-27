<?php

namespace App\Http\Controllers;

use App\Empleos;
use Illuminate\Http\Request;

class EmpleosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['empleos'] = Empleos::paginate(10);
        return view('empleos.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = request()->except('_token');
        Empleos::insert($datos);
        return redirect('empleos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empleos  $empleos
     * @return \Illuminate\Http\Response
     */
    public function show(Empleos $empleos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empleos  $empleos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleo = Empleos::findOrFail($id);
        return view('empleos.edit', compact('empleo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empleos  $empleos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datos = request()->except(['_token','_method']);
        Empleos::where('id','=', $id)->update($datos);
        return redirect('empleos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empleos  $empleos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleos $empleos)
    {
        //
    }
}
