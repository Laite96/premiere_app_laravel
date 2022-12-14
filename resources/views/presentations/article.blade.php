@extends('base', ['title' => 'Articles'])

@section('content')
    <h1 class="text-gray-700 mb-5 font-semibold">Bienvenu sur ma page d'article</h1>
    @if($post->count() > 0)
        @foreach ($post as $posts)
            <h3><a href="{{ route('show', ['id' => $posts->id ]) }}">{{ $posts->title }}</a></h3>
        @endforeach
    @else
        <span>Aucun post publié</span>
    @endif

    <h1>Liste des videos</h1>

    @foreach ($vide as $videos )

        <div>{{ $videos->url }} || Ajoutée le {{ $videos->created_at->format('d/m/y') }}</div>

    @endforeach

    @forelse ($video->comments as $comment)
        <div>{{ $comment->content_comment }} || Crée le {{ $comment->created_at->format('d/m/y') }}</div>

    @empty
        <div>Aucun commentaire pour cette video</div>
    @endforelse

    <p><a href="{{route('create_post')}}" class="text-indigo-600 hover:text-indigo-800 underline">Creer un post</a></p>
    <p><a href="{{route('home')}}" class="text-indigo-600 hover:text-indigo-800 underline">Retour sur la page d'acceuil</a></p>
@endsection
