@extends('layout')

@section('content')
    <h1>
        {{$heading}}
    </h1>
    <br>
        @if(count($notes) == 0)
            <p> You don't have any notes yet...</p>
        @endif

        @foreach($notes as $note)
            <a href="/notes/{{$note['id']}}"> {{$note['title']}} </a>
            <p> {{$note['content']}} </p>
        @endforeach

@endsection