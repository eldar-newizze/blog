<?php

namespace App\Http\Controllers;

use App\Models\User;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AppController extends Controller
{

    public function init()
    {
        $user = Auth::user();
        //@todo  \ не нужен response()->
        return \response()->json(['user' => $user], 200);
    }

    public function login(Request $request)
    {
        //@todo PSR-2/12
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password], true)) {
            return response()->json(Auth::user(), 200);
        } else {
            return \response()->json(['error' => 'Cold not log you in'], 401);
        }
    }

    public function register(Request $request)
    {
        //@todo use scope
        $user = User::where('email', $request->username)->first();

        if (isset($user->id)) {
            return response()->json(['error' => 'Email already exist.'], 401);
        }

        $user = new User();

        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->remember_token = Str::random(80);

        //@todo лишние пробелы
        $user->save();

        Auth::login($user);

        return response()->json($user, 200);
    }

    public function logout()
    {
        Auth::logout();
    }

}
