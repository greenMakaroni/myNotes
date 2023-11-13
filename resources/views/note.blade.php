@extends('layout')

@section('content')

        <h1> {{$note['title']}} </h1>
        <p> {{$note['content']}} </p>

@endsection
