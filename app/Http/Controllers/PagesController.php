<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //sjh : main page
    public function root()
    {
        return view('pages.root');
    }
}
