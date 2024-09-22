<?php

namespace App\Http\Controllers;

use App\Http\Resources\AdminTicketResource;
use App\Models\Tickets;
use Illuminate\Http\Request;

class AdminTicketController extends Controller
{
    //
    public function showtickets(){
        $users= Tickets::query()->orderBy('user_id','desc')->get();
        $data=AdminTicketResource::collection($users);
        return view('admins.adminTickets')->with(['data'=>$data]);
    }
}
