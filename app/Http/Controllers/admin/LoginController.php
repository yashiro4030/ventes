<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginReauest;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function showLogin()
    {
        return view('admin.auth.login');
    }

    public function Login(LoginReauest $request)
    {

        if (auth()->guard('admin')->attempt(['username' => $request->input('username'), 'password' => $request->Input('password')])) {
            return redirect()->route('admin.Dash');
        }
    }

    public function logout()
    {

        auth()->logout();
        return redirect()->route('admin.showlogin');
    }
}
