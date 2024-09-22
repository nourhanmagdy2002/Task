<?php

namespace App\Http\Controllers;

use App\Actions\UserInfoStore;
use App\Http\Requests\RegitserFormRequest;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index(){
        return view('auth.register');
    }
    public function save(RegitserFormRequest $request){

        $data=$request->validated();
        if($data){
        UserInfoStore::store($data);
            return redirect()->To('/auth/login');

        }
        else{
            return redirect()->back()->with('noregsiter', 'register error');
        }
    }
}
