<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
         $request->validate([
            'login' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('name', $request['login'])->where('password', $request['password'])->first();

        if(!$user){
            return ['status' => 'error'];
        }

        Auth::login($user);

        return ['status' => 'success'];
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
