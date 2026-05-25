<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//sign up
use Illuminate\Support\Facades\Hash;
use App\Models\User;

//login
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    function showsign()
    {
        return view('Sign');
    }
    function insert(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:14',
            'username' => 'required|string|unique:users|min:6|max:14',

        ]);

        User::create([
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'username' => $request->username,


        ]);
        return redirect('Home');
    }
    function showlogin()
    {
        return view('Login');
    }
    function login(Request $request)
    {
      $request->validate([
            'email' => 'required',
            'password' => 'required|min:6|max:14',
        ]);
       if(Auth::attempt(['email' => $request->email,'password' => $request->password]))
        {
            $request->session()->regenerate();
            $user = Auth::user()->username;
            return redirect('Home');
        }
        else
        {
            return back->withErrors([
            'email' => 'invalid email or password',
            
            ]);
        }

    }
    function logout(Request $request)
    {
        Auth::Logout();
        $request->session()->invalidate();     
        $request->session()->regenerateToken(); 
    
        return redirect('/Home');
        
    }
}
