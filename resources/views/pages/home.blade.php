@extends('app')

@section('title',config('app.name'))

@section('content')   
        <img src="/images/ci.jpg" alt="ci flag">
        <h1>Hello Ivory coast</h1>
        <p>It's currently {{date('h:i A')}}</p>
@endsection

