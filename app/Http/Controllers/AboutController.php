<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //

    public function about()
    {

        // retun view about -> é o about.blade.php
        return view('about');
    }
}
