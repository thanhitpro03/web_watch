<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    function login(){
        return view('user.login');
    }

    function register() {
        return view('user.register');
    }

    function check_login(){

$data = request()->all();
dd($data);
        // $username = request()->input('username');
        // $password = request()->input('password');

    }

    function check_register(){

        $data = request()->all();
        dd($data);
                // $username = request()->input('username');
                // $password = request()->input('password');

            }



}
