<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $req)
    {
        $crediential = $req->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($crediential)) {
            $req->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->with('authAlert', 'Login failed!');
    }

    public function logout(Request $req)
    {
        Auth::logout();

        $req->session()->invalidate();

        $req->session()->regenerateToken();

        return redirect('/');
    }
}
