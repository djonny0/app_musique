<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register.register');
    }
    public function lesson()
    {
        return view('lessons.lesson');
    }
    public function login()
    {
        return view('auth.login.login');
    }
    public function contact()
    {
        return view('contact');
    }
    public function profil()
    {
        return view('profil');
    }
    public function devoir()
    {
        return view('devoir');
    }

    //traitement du formulaire d'inscription*
    public function register_traitement(Request $request)
    {
        User::Create([
            'name' => $request->input('nom'),
            'email' => $request->input('email'),
            'age' => $request->input('age'),
            'image' => $request->input('image'),
            'number' => $request->input('tel'),
            'password' => bcrypt($request->input('password')),
        ]);

        return redirect()->route('login');
    }

    //traitement du formulaire de login
    public function login_traitement(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->route('home');
        }
    }
    //traitement du formulaire de login
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');
    }

}
