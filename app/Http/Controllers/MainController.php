<?php

namespace App\Http\Controllers;

use App\Models\Post;

class MainController extends Controller
{
    public function home()
    {
        return view('presentations.home');
    }

    public function article()
    {
        $posts = Post::all();
        return view('presentations.article',[
            'post'=>$posts
        ]);
    }
    public function apropos()
    {
        return view('presentations.apropos');
    }
}
