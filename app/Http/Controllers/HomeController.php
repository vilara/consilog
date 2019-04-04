<?php

namespace App\Http\Controllers;

use App\usuario;
use Illuminate\Http\Request;
use App\User;

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
    	$user = User::with('funcoe.usuario')->where('id','>','0')->get();
    	
    	return view('usuario.index', compact('user'));
    }
}
