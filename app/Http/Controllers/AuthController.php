<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Hash;

class AuthController extends Controller
{
    public function login() {
        if (Auth::check()){
            return view('dashboard');
        }else{
            return view('login');
        }
    }

    public function user_auth(request $request) {
        if (isset($request->email) && !empty($request->email) && isset($request->password) && !empty($request->password)){
            if(Auth::guard()->attempt(['email' => $request->email, 'password' => $request->password])){
                return redirect()->route('dashboard');
            }else{
                return "Information is wrong!";
            }
        }
    }

}