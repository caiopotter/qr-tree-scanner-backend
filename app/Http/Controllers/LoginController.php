<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Auth\LoginProxy;

class LoginController extends Controller
{

    private $loginProxy;

    public function __construct(LoginProxy $loginProxy)
    {
        $this->loginProxy = $loginProxy;
    }

    public function login(Request $request)
    {
      $username = $request->username;
      $password = $request->password;

      return response($this->loginProxy->attemptLogin($username, $password));
    }
}
