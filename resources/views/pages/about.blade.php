@extends('app')

@section('title','About Us | '.config('app.name'))

@section('content')
        <p>Build with &hearts; by me</p>
        <p><a href="{{route('home')}}">Revenir à la page d'accueil</a></p>
@endsection
