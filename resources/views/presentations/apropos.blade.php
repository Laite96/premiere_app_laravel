@extends('base', ['title' => 'Apropos'])
@section('content')
    <img src="{{asset('img/ly.jpg')}}" alt="PDG" class="w-16 md:w-32 lg:w-48 rounded shadow-md h-40 my-12">
    <h2 class="text-gray-700 mb-5 font-semibold">
        Cette appliation à été consue par Laite <span class="text-pink-500">&hearts;</span> Yagami
    </h2>
    <p><a href="{{route('home')}}" class="text-indigo-600 hover:text-indigo-800 underline">Retour sur la page d'acceuil</a></p>
    
    <p><a href="{{route('article')}}" class="mb-5 text-indigo-600 hover:text-indigo-800 underline">Mes articles</a></p>
@endsection
