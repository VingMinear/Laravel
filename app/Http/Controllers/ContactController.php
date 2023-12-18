<?php

namespace App\Http\Controllers;

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
