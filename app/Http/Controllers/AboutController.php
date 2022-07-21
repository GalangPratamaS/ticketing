<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
     public function index()
    {
        //      
        return view('about/invoices');
    }

    public function term()
    {
        return view('term_privacy/term');
    }

    public function privacy()
    {
        return view('term_privacy/privacy');
    }
}
