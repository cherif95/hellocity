@extends('app')

@section('title','About Us | '.config('app.name'))

@section('content')
        <img src="{{asset('images/guep.jpg')}}" alt="guep" class="my-12 h-32 shadow-md rounded-full">
        <h2 class="text-gray-700">Build with <span class="text-pink-500">&hearts;</span> by me</h2>
        <p class="mt-5"><a href="{{route('home')}}" class="text-indigo-500 hover:text-indigo-600 underline">Revenir à la page d'accueil</a></p>
@endsection
