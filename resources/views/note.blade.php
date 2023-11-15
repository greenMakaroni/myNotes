@extends('layout')

@section('content')

        @foreach ($result as $note)
            <h1> {{$note->title}} </h1>
            <p> {{$note->content}} </p>
        @endforeach

@endsection
