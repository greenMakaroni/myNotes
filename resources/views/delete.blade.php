@extends('layout')

@section('content')
<div class="flex flex-col justify-center items-center">
    <h1 class="font-['Montserrat'] text-6xl mb-[25px]"> Delete Note? </h1>
    <div class="shadow-lg bg-yellow-100 overflow-clip m-[25px] duration-300 w-[300px] h-[200px] hover:shadow-2xl p-[25px]">
        <h2 class="text-lg font-bold mb-[25px]">
            {{$note->title}}
        </h2>
        <p class="italic">
            {{$note->content}} 
        </p>
    </div>

    <div class="flex flex-row justify-between mt-[75px] w-[50%]">
        <a href="/notes/{{$note->id}}" class="font-['Montserrat'] text-[12px] px-[50px] py-[15px] border-2  border-yellow-500  hover:bg-yellow-500  hover:text-white  font-bold  flex  items-center duration-300">
            <span class="mr-[15px] material-symbols-outlined">
                arrow_back
            </span>
            Leave
        </a>       
    
        <form method="POST" action="/notes/{{$note->id}}">
            @csrf 
            @method('DELETE')
            <button class="font-['Montserrat'] text-[12px] px-[50px] py-[15px] border-2 border-red-500 hover:bg-red-500 hover:text-white font-bold flex items-center duration-300">
                <span class="mr-[15px] material-symbols-outlined">
                    delete
                </span>
                Delete forever
            </button>
        </form>
    </div>
</div>


@endsection