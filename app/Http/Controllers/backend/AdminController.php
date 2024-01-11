<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function home(){
        return view('backend.home');
    }
    public function table(){
        return view('backend.table');
    }
    public function billing(){
        return view('backend.billing');
    }
}