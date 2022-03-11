<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homController extends Controller
{
    public function about($var = null)
    {
        return view('about');
    }

    function info()
    {
        return view('info');
    }
}
