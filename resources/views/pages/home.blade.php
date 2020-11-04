@extends('app')

@section('title',config('app.name'))

@section('content')   
        <img src="{{asset('images/ci.jpg')}}" alt="ci flag"  class="rounded shadow-md h-32">
        <h1 class="text-indigo-600 sm:text-5xl text-3xl font-semibold mt-5">Hello Ivory coast</h1>
        <p class="text-lg text-gray-800">It's currently {{date('h:i A')}}</p>
@endsection

