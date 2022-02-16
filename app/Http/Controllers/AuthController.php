<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class AuthController extends Controller
{
    public function authCheckWelcome(){
        $auth = Auth::check();

        return view('welcome',['auth'=>$auth]);
    }

    public function authCheckLogin(){
        $auth = Auth::check();

        return view('login',['auth'=>$auth]);
    }

    public function authCheckRegister(){
        $auth = Auth::check();

        return view('register',['auth'=>$auth]);
    }

    public function register(Request $request){
        $newUser = new User();

        $validated = $request->validate([
            'username' => ['required', 'string', 'max:40', 'unique:users'],
            'email' => ['required', 'string', 'max:40', 'unique:users'],
            'password' => ['required', 'string', 'max:40'],
        ]);

        $newUser->username = $validated['username'];
        $newUser->email = $validated['email'];
        $newUser->password = bcrypt($validated['password']);

        $newUser->save();

        $loginInfo = $request->only('email','password');

        if(Auth::attempt($loginInfo)) {
            return redirect('/')->with('auth', true);
        }
    }

    public function login(Request $request){
        
        $loginInfo = $request->only('email','password');

        if(Auth::attempt($loginInfo)) {
            return redirect('/')->with('auth', true);
        }
        return redirect('/');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
