@extends('base', ['title' => 'Creation_post'])

/*@if($errors->any())
    @foreach ($erros->all() as $error)
        <div><p class="text-red-500">{{ $error }}</p></div>
    @endforeach
@endif*/

@section('content')
    <h1 class="text-gray-700 mb-5 font-semibold">Bienvenu sur ma page de creation des post</h1>
    <form action="{{ route('store') }}" method="post">
        @csrf
        <input type="text" name="title" placeholder="Titre de l'article" class="border-gray-600 border-2">
        <textarea name="content" placeholder="Contenu de l'article" cols="30" rows="10" class="border-gray-600 border-2"></textarea>
        <button type="submit" class="rounded-none bg-indigo-500">Creer</button>
    </form>
    <p><a href="{{ route('home') }}" class="text-indigo-600 hover:text-indigo-800 underline">Retour sur la page
            d'acceuil</a></p>
@endsection
