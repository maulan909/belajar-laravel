<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.register', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'username' => ['required', 'min:5', 'max:255', 'unique:users'],
            'password' => 'required|min:8|max:255|confirmed',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flash('success', 'Registration successful! Please login.'); // jika ingin menggunakan session terpisah
        // return redirect('/login'); //jika ingin menggunakan session terpisah

        return redirect('login')->with('success', 'Registration successful! Please login.');
    }
}
