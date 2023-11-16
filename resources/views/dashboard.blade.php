@extends('layout')

@section('content')
    <br>
        <div class="flex items-center justify-between fler-row">
         <h1 class="text-6xl mb-[50px]"> My Notes </h1>

        <a 
            href="/notes/create" 
            class="
            px-[50px]
            py-[15px]
            border-2 
            border-green-500 
            hover:bg-green-500 
            hover:text-white 
            font-bold 
            flex 
            items-center
            duration-300">

            <span class="text-[50px] material-symbols-outlined">
                add
            </span>
               ADD NOTE
        </a>
         
        </div>

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

        {{-- Flash message --}}
        @if(session()->has('message'))
            <div class="w-[100vw] flex justify-center opacity-0 animate-displayMessage fixed top-0 z-50">
                <p class="w-[33vw] flex justify-center bg-green-500  text-white font-bold px-[50px] py-[25px]">
                    {{session('message')}}
                </p>
            </div>
        @endif
  

@endsection