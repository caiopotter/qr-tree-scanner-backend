<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function users(){
        return User::all();
    }

    function register(Request $request){
        $user = ([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        User::create($user);
        return 'ok';
    }
}
