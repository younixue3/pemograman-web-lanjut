<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SecurityController extends Controller
{
    public function login_form()
    {
        return view('auth.login_form');
    }

    public function login(Request $request)
    {
//        dd($request);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect(route('admin.index'));
        }
        return redirect(route('home'));
    }
}
