<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function index()
    {
        return view('front.welcome');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function coaching()
    {
        return view('front.coaching');
    }

    public function coachingSingle()
    {
        return view('front.single_coaching');
    }

    public function visa()
    {
        return view('front.visa');
    }

    public function visaSingle()
    {
        return view('front.single_visa');
    }

    public function country()
    {
        return view('front.country');
    }

    public function countrySingle()
    {
        return view('front.single_country');
    }
}
