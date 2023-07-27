<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('welcome');
    }
    public function doLogin()
    {
        $inputData = [
            'email' => request('email'),
            'password' => request('password'),
        ];
        //print_r( $inputData );exit();
        if (auth()->guard('login')->attempt($inputData)) {
            return redirect()->route('home');
        } else {
            return redirect()->route('login')->with('message','Login is Invalid');
        }
    }
    public function doLogout(){
        auth()->logout();
        return redirect()->route('login');
    }
}
