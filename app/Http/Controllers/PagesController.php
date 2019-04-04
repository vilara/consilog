<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuario;
use App\telefone;
use App\User;

class PagesController extends Controller
{
    public function welcome(){
        $usuarios = User::all();
        return view('welcome', compact('usuarios'));
    }
    public function about(){
        return view('about');
    }
}
