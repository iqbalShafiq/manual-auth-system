<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login', ['title' => "Login"]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $isTrue = Auth::attempt($request->only('email', 'password'), $request->remember);

        if (!$isTrue) {
            return redirect()->route('login');
        }

        return redirect()->intended('/');
    }
}
