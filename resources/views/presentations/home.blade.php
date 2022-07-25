@extends('base')
@section('content')
    <img src="{{asset('img/flag_guinee.png')}}" class="w-16 md:w-32 lg:w-60 rounded shadow-md h-32 mt-12" alt="Drapeau de la Guinée">
    <h1 class="mt-5 text-indigo-700 text-2xl sm:text-4xl font-semibold">Salut!Je viens de la Guinée</h1>
    <p class="text-lg text-gray-600">Il est {{date('H:i A')}} à Conakry</p>
@endsection
