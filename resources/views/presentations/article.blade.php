@extends('base', ['title' => 'Articles'])

@section('content')
    <h1 class="text-gray-700 mb-5 font-semibold">Bienvenu sur ma page d'article</h1>
    @foreach ($post as $posts)
        <h3>{{ $posts->title }}</h3>
    @endforeach

    <p><a href="{{route('home')}}" class="text-indigo-600 hover:text-indigo-800 underline">Retour sur la page d'acceuil</a></p>
@endsection
