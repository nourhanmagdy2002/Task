<?php

namespace App\Actions;

use App\Models\Tickets;

class TicketInfoStore
{
    public static function save($id,$data){
        return  Tickets::query()->create(array_merge(['user_id'=>$id],$data));




    }

}
