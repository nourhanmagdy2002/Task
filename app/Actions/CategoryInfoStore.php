<?php

namespace App\Actions;

use App\Models\Categories;

class CategoryInfoStore
{
    public static function save ($id,$data){
      return Categories::query()->create(array_merge(['user_id'=>$id],$data));
    }

}
