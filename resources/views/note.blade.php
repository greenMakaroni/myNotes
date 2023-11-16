@extends('layout')

@section('content')

        <div class="flex flex-col">
            <h1 class="text-6xl mb-[50px]"> {{$note->title}} </h1>
            <p> {{$note->content}} </p>

            <div class="flex flex-row justify-between mt-[150px] w-[50%]">
                <a 
                href="/notes/create" 
                class="
                px-[50px]
                py-[15px]
                border-2 
                border-yellow-500 
                hover:bg-yellow-500 
                hover:text-white 
                font-bold 
                flex 
                items-center
                duration-300">
    
                <span class="text-[50px] material-symbols-outlined">
                    edit
                </span>
                   Edit
            </a>        <a 
            href="/notes/create" 
            class="
            px-[50px]
            py-[15px]
            border-2 
            border-red-500 
            hover:bg-red-500 
            hover:text-white 
            font-bold 
            flex 
            items-center
            duration-300">

            <span class="text-[50px] material-symbols-outlined">
                delete
            </span>
               Delete
        </a>
            </div>
        </div>
         

@endsection
