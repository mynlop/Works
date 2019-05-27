<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Empleos;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $idUsuario = Auth::user()->id;
        $empleos = Empleos::where('empresa_id','=',$idUsuario)->where('estado','=',1)->paginate(10);
        return view('home', compact(['user','empleos']));
    }
}
