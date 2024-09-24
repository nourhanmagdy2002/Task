<?php

namespace App\Http\Controllers;

use App\Actions\CategoryInfoStore;
use App\Http\Requests\CtegoryFormRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index(){
        return view('adminCategory');
    }

    public function store(CtegoryFormRequest $request){
        $cat= $request->validated();
       $user=User::query()->find(Auth::id());
        if($cat){
            CategoryInfoStore::save($user->id,$cat);
            return redirect()->To('/home');
        }
        else{
            echo 'no data';
        }



    }
}
