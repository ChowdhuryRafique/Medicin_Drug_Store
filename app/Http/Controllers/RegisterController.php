<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function Register(){
        
        return view('auth.register');
    }
    
}
