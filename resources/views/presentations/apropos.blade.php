@extends('base')
@section('title', 'Apropos|'. config('app.name'))
@section('content')
    <img src="{{asset('img/ly.jpg')}}" alt="">
    <p>Cette appliation à été consue par Laite&hearts;Yagami</p>
    <p><a href="{{route('home')}}">Retour sur la page d'acceuil</a></p>
@endsection
