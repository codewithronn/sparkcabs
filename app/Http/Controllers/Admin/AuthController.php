<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // $request->validate([
        //     'username' => 'required',
        //     'password' => 'required',
        // ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('system')->attempt($credentials)) {
            return redirect('/');
        }

        Session::flash('error', 'Username and password is wrong');
        return redirect('login');
    }
}
