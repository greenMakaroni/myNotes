@extends('layout')

@section('content')

            <h1 class="text-6xl mb-[50px]"> {{$note->title}} </h1>
            <p> {{$note->content}} </p>

@endsection
