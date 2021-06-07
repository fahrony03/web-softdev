<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.layouts.homepage');
    }

    public function informasi(){
        return view('frontend.layouts.informasi');
    }

    public function dokumentasi(){
        return view('frontend.layouts.dokumentasi');
    }

    public function contact(){
        return view('frontend.layouts.contact');
    }
}