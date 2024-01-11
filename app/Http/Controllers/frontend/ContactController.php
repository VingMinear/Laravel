<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(Request $req)
    {
        // echo "<script>alert('home')</script>";
        dd($req->phone);
        return view('contact');
    }
}
