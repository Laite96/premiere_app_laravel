<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public function home()
    {
        return view('presentations.home');
    }

    public function article()
    {
        return view('presentations.article');
    }
    public function apropos()
    {
        return view('presentations.apropos');
    }
}
