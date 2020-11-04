@extends('app')

@section('title','About Us | '.config('app.name'))

@section('content')
        <img src="/images/guep.jpg" alt="guep">
        <p>Build with &hearts; by me</p>
        <p><a href="{{route('home')}}">Revenir à la page d'accueil</a></p>
@endsection
