<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function index(Request $request, $title, $content)
    {
        return view('day2.page')->with(['title' => $title, 'content' => $content]);
    }
}
