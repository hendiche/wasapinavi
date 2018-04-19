<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function seemore()
    {
        return view('seemore');
    }

    public function details()
    {
        return view('details');
    }

    public function facility()
    {
        return view('facility');
    }

    public function facilityDetails()
    {
        return view('facilityDetails');
    }

    public function aboutus()
    {
        return view('aboutUs');
    }

    public function contact()
    {
        return view('contact');
    }
}
