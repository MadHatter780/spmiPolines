<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function adminIndex(){
        $user = User::get();
        return view("home.index-admin",compact('user'));
    }
    public function addUser(Request $request){
        $data = $request->all();
        $data["password"] = Hash::make($request->password);
        $data["ts_ids"] = 1;
        $data["isian_standar_ids"] = 1;
        $data["keahlian_ids"] = 1;
        $user = new User;
        $user->fill($data)->save();
        dd($data);
        return back();
    }
    //
}
