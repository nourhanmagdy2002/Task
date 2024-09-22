<?php

namespace App\Actions;

use App\Models\User;

class UserInfoStore
{
    public static function store($data,$id=null){
        $save= User::query()->updateOrCreate([
            'id'=>$id
        ],$data);
        return $save;
    }

}
