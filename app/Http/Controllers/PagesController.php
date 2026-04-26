<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
        return view('about');
    }

    public function services(){
        return view('services');
    }

    public function construction(){
        return view('construction');
    }

    public function interior_design(){
        return view('interior-design');
    }

    public function land_surveying(){
        return view('land-surveying');
    }

    public function team(){
        return view('team');
    }

    public function team_details(){
        return view('team-details');
    }

    public function portfolio(){
        return view('portfolio');
    }

    public function portfolio_details(){
        return view('portfolio-details');
    }

    public function blog(){
        return view('blog');
    }

    public function blog_details(){
        return view('blog-details');
    }

    public function faq(){
        return view('faq');
    }

    public function contact(){
        return view('contact');
    }
}