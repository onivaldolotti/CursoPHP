<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class EntrarController extends Controller
{
    public function index()
	{
		return view( 'entrar.index');
	}

	public function entrar(Request $request)
	{
		if(!Auth::attempt($request-> only(['email', 'password']))) {
			return redirect()->back()->withErrors('Usuario e/ou Senha incorretos');
		}

		return redirect()->route('listar_series');	
	}


}
