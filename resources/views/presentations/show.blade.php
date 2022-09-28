@extends('base', ['title' => 'article'])

@section('content')
    <h1>Titre de l'article : {{ $post->title}}</h1> <br>
    <span>{{ $post->image ? $post->image->path : "Pas d'image pour ce post" }}</span>
    <h3>{{ $post->content }} | Publié le {{ $post->created_at }}</h3>
    @forelse ($post->comments as $comment)

    <div>{{ $comment->content_comment }} || Crée le {{ $comment->created_at->format('d/m/y') }}</div>

    @empty
        <div>Aucun commentaire pour ce post</div>
    @endforelse

@endsection
