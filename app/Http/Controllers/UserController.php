<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request) {
        $request->validate([
            'email' => ['email', 'max:255', 'required'],
            'password' => ['max:255', 'required'],
        ]);

        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            return redirect('/');
        }

        return redirect()->back()->with('error', 'Incorrect login or password');
    }

    public function register(Request $request) {
        $request->validate([
            'firstname' => ['max:100', 'required'],
            'lastname' => ['max:100'],
            'email' => ['email','max:255', 'unique:users', 'required'],
            'password' => ['max:255', 'required'],
        ]);
        $user = User::create([
            'name' => $request->firstname.' '.$request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        session()->flash('success', 'Successful registration');
        Auth::login($user);
        return redirect('/');
    }

    public function newsletter(Request $request) {
        return '<h1>На почту <u>'.$request->input('email').'</u> теперь будут приходить новости, спасибо!)</h1>';
    }

    public function exit() {
        Auth::logout();
        return redirect('/');
    }
}
