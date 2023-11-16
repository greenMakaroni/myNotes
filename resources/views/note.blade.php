@extends('layout')

@section('content')

        <div class="flex flex-col h-[80vh] ">
            <h1 class="text-6xl mb-[50px]"> Note Preview </h1>
                <h2 class="text-lg font-bold mb-[25px]">
                    {{$note->title}}
                </h2>
                <p class="italic">
                    {{$note->content}} 
                </p>
        </div>
        <div class="flex flex-row justify-around bottom-0">
            <a href="/"class="px-[50px] py-[15px] border-2 border-yellow-500 hover:bg-yellow-500 hover:text-white font-bold flex items-center duration-300">
   
                <span class="text-[50px] material-symbols-outlined">
                    arrow_back
                </span>
                   Go Back
             </a>  
            <a 
            href="{{$note->id}}/edit"
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
        href="{{$note->id}}/delete" 
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
@endsection
