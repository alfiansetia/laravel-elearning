<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function register()
    {
        return view('partials.register', [
            'title' => 'Register'
        ]);
    }


    public function store(Request $request)
    {
        $validatedData =  $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|same:password',
            'gender' => 'required',
            'dob' => 'required|date|before:today|after:01-jan-1900',
            'country' => 'required',
        ]);

        $validatedData['password'] = hash::make($validatedData['password']);

        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'email_verified_at' => now(),
            'password' => $validatedData['password'],
            'gender' => $validatedData['gender'],
            'dob' => $validatedData['dob'],
            'country' => $validatedData['country'],
            'remember_token' => Str::random(10),
        ]);
        $request->session()->flash('success', 'Registration Successfull! Please Login!');

        return redirect('/login');
    }
}
