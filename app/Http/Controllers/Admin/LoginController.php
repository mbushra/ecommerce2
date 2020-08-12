<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Login;


class LoginController extends Controller
{
    public function getLogin()
    {
        return view('admin.auth.login');
    }

    public function login(Login $request)
    {

    }
}
