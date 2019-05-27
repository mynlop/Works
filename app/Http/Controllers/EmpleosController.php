<?php

namespace App\Http\Controllers;

use App\Empleos;
use Illuminate\Http\Request;
use DB;

class EmpleosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $empleos = DB::table('empleos')
                ->join('users','empleos.empresa_id','=','users.id')
                ->select('empleos.*','users.nombre')
                ->where('estado','=',1)->paginate(10);
        // return response()->json($empleos);
        return view('empleos.index', compact('empleos'));
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
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empleos  $empleos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empleo = Empleos::findOrFail($id);
        return view('empleos.show', compact('empleo'));
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
        return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empleos  $empleos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datos = request()->except(['_token','_method']);
        Empleos::where('id','=', $id)->update(['estado'=> 0]);
        return redirect('empleos');
    }
}
