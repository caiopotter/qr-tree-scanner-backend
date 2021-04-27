<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUserDiscoveredTrees(Request $request){
        $user = User::find($request)->first();
        return $user->trees()->withTimestamps()->get();
    }

    public function getUserComments(Request $request){
        $user = User::find($request)->first();
        return $user->comments()->get();
    }
}
