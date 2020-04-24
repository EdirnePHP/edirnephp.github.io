<?php

namespace edirnephp\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function workshop(){
        return view('workshop');
    }
}
