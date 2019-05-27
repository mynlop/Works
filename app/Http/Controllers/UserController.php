<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit(User $user){
        $user = Auth::user();
        return view('users.edit', compact('user'));
    }

    public function update(User $user)
    {
        $this->validate(request(), [
            'nombre' => 'required',
            'direccion' => 'required'
        ]);

        $user->nombre = request('nombre');
        $user->direccion = request('direccion');

        
        $user->save();
        return redirect('home');
    }
}