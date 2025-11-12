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
}
