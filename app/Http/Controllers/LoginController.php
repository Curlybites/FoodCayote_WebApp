<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view ('front.login');
    }

    public function registration(){
        return view ('Front.registration');
    }
}
