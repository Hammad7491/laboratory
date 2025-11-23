<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function phlebotomy()
    {
        return view('phlebotomy');
    }

     public function covid()
    {
        return view('covid');
    }

     public function background()
    {
        return view('background');
    }

     public function vital()
    {
        return view('vital');
    }

    public function employment()
    {
        return view('employment');
    }

    
    public function drug()
    {
        return view('drug');
    }

    public function dna()
    {
        return view('dna');
    }

     public function live()
    {
        return view('live');
    }

    public function hydration()
    {
        return view('hydration');
    }


    public function aboutus()
    {
        return view('aboutus');
    }

    public function contactus()
    {
        return view('contactus');
    }

    public function location()
    {
        return view('location');
    }



    public function bundles()
    {
        return view('bundles');
    }
     


    
}
