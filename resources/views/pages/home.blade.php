@extends('app')

@section('title','Hello city')

@section('content')   
        <h1>Hello Ivory coast</h1>
        <p>It's currently {{date('h:i A')}}</p>
@endsection

