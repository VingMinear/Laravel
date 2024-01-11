<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function aboutUs()
    {
        // echo "<script>alert('home')</script>";
        return view('about-us');
    }   
}
