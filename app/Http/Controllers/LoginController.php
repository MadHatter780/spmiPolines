<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function proccess(Request $request){
        $data = [
            'email' => $request->input('username'),
            'password' => $request->input('password'),
        ];

        if(Auth::attempt($data)){
            dd("lol");
        }
        else {
            dd("lola");
        }
        dd($request->all());
    }
    //
}
