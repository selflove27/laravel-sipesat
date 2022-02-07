<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return redirect('/login');
    }

    public function login(Request $request ) {
        if(Auth::attempt(['username' => $request->username, 'password' => $request->password]))
        {
            return view()('/dashboard');
        }else{
            return back();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
