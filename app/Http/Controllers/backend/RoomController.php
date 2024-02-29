<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index() {
        $data['rooms']=DB::table('tbl_room')->get();

        return view('backend.layout.index',$data);
    }
}
