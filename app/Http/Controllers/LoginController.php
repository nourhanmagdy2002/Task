<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginFormRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }
    public function login_fun(LoginFormRequest $request)
    {
        $user = $request->validated();
        if (auth()->attempt($user)) {
            return redirect()->back()->with('login', 'login success');


        }
        else{
            return redirect()->back()->with('loginfail', 'Wrong Phone Or Password');
    }


    }
}
