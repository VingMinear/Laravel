<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // echo "<script>alert('home')</script>";
        return view('homepage');
    }
}
