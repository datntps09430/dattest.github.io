<?php

namespace App\Controllers;

use Exception;

class Login extends BaseController
{

    public function index()
    {
        $param = [];
        return view('Login/index', $param);
    }
}
