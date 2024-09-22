<?php

namespace App\Http\Controllers;

use App\Http\Resources\AdminUserResource;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUsersController extends Controller
{

    public function showusers(){
       $users= User::query()->orderBy('id','desc')->get();
      $data=AdminUserResource::collection($users);
      return view('admins.users')->with(['data'=>$data]);
    }
}
