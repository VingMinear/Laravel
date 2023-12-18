<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function aboutUs()
    {
        // echo "<script>alert('home')</script>";
        return view('about-us');
    }   
}
