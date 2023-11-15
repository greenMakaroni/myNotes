@extends('layout')

@section('content')
    <br>
        @if(count($notes) == 0)
            <p> You don't have any notes yet...</p>
        @endif

        <div class="w-[100vw] flex flex-row flex-wrap">
            @foreach($notes as $note)
            <a href="/notes/{{$note->id}}"> 
                <div class="shadow-lg bg-yellow-100 overflow-clip m-[25px] duration-300 w-[300px] h-[200px] hover:shadow-2xl p-[25px]">
                    <h2 class="text-lg font-bold mb-[25px]">
                        {{$note->title}}
                    </h2>
                    <p class="italic">
                        {{$note->content}} 
                    </p>
                </div>
            </a>
            @endforeach
        </div>
  

@endsection