<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('day2.index');
    }

    public function about(Request $request)
    {
        return view('day2.about');
    }


}
