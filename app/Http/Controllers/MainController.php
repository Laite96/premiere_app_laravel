<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Post;
use App\Models\Videos;
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
        $videos = Videos::find(1);

        $vid = Videos::all();

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
            'post' => $posts,
            'video' => $videos,
            'vide' => $vid,
        ]);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('presentations.show', [
            'post' => $post,
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

    public function register_plymorphic()
    {
        $post = Post::find(2);
        $video = Videos::find(1);

        $comment1 = new Comments(['content_comment' => 'mon premier commentaire']);
        $comment2 = new Comments(['content_comment' => 'mon deuxieme commentaire']);
        $comment3 = new Comments(['content_comment' => 'mon troisiseme commentaire']);

        $post->comments()->saveMany([
            $comment1, $comment2,
        ]);

        $video->comments()->save($comment3);

    }
}
