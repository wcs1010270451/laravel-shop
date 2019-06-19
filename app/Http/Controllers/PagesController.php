<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function root()
    {
//        dd(123);
        return view('pages.root');
    }
}
