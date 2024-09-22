<?php

namespace App\Http\Controllers;

use App\Actions\TicketInfoStore;
use App\Http\Requests\TicketFormRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketsController extends Controller
{
    public function index()
    {
        return view('tickets');

    }

    public function store(TicketFormRequest $request)
    {
        $user=User::query()->find(Auth::id());
        $ticket=$request->validated();
        if($ticket){
            TicketInfoStore::save($user->id,$ticket);
            return redirect()->back()->with('submit', 'Your Ticket Submitted Successfully');
        }


    }
}
