<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\usuario;
use App\perfil;

class RegisterController extends Controller
{
    /*
    ,--------------------------------------------------------------------------
    , Register Controller
    ,--------------------------------------------------------------------------
    ,
    , This controller handles the registration of new users as well as their
    , validation and creation. By default this controller uses a trait to
    , provide this functionality without requiring any additional code.
    ,
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'nomeGuerra' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:usuarios'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        		'cpf' => ['required','numeric','unique:usuarios'],
        		'idt' => ['required','numeric'],
        		'sexo' => ['required'],
        		'funcoe_id' => ['required'],
        		'om_id' => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
    	    	
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'nomeGuerra' => $data['nomeGuerra'],
            'cpf' => $data['cpf'],
            'idt' => $data['idt'],
            'sexo' => $data['sexo'],
            'funcoe_id' => $data['funcoe_id'],
            'om_id' => $data['om_id'],
            'perfil_id' => $data['roles'],
            'password' => Hash::make($data['password']),
        ]);
        
        $usu = User::all()->last();
        $usu->perfils()->attach(1);
        
        
    }
}
