<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(LoginRequest $reqest){
        $credentials = $reqest->getCredentials();
        if(!Auth::validate($credentials)){
             echo("вы не вошли");
             return;
        }
        $user=Auth::getProvider()->retrieveByCredentials($credentials);
        Auth::login($user);
        return view('role_create');
    }
}
