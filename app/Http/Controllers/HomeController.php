<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function index_2(){
        return view('index-2');
    }

    public function index_3(){
        return view('index-3');
    }

    public function index_4(){
        return view('index-4');
    }
}