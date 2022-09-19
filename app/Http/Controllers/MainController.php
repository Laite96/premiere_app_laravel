<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('presentations.home');
    }

    public function article()
    {
        $posts = Post::all();

        //Pour le update
        /*$posts = Post::find(1);
        $posts->update([
        'title' => "titre edité",
        ]);
        dd("edité");*/

        //Pour le delete
        /*$posts = Post::find(12);

        $posts->delete();

        dd("Supprimé");*/

        return view('presentations.article', [
            'post' => $posts
        ]);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);


        return view('presentations.show', [
            'post' =>$post
        ]);
    }
    public function apropos()
    {
        return view('presentations.apropos');
    }

    public function create_post()
    {
        return view('presentations.create_post');
    }

    public function store(Request $request)
    {
        //La technique amateur
        /*$post = new Post;
        $post->title = $request->title; //le premier est le nom dans la base de donnee et le second le nom dans le formulaire le name
        $post->content = $request->content;
        $post->save();*/

        //La technique professionnel et surtout ne pas oublier de proteger les fillables les champs àremplir

        Post::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        dd("post creer");
    }
}
