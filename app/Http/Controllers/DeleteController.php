<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeleteController extends Controller
{
    //
    public function delete(){
        if(request()->filled('modal_name')&&request()->filled('id')){
            DB::select('DELETE FROM '.request('modal_name').' WHERE id=' .request('id'));

        }

    }
}
