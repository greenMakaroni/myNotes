@extends('layout')

@section('content')

        <div class="flex flex-col ">
            <h1 class="text-6xl mb-[50px] "> Note Preview </h1>
            <div class="p-[50px] bg-yellow-100 h-[60vh] w-[60vw] mb-[100px] shadow-2xl flex flex-col">
                <h2 class="text-[50px] font-bold mb-[25px]">
                    {{$note->title}}
                </h2>
                <p class="text-[36px] italic">
                    {{$note->content}} 
                </p>
            </div>
            
        </div>
        <div class="flex flex-row justify-around bottom-0">
            <a href="/"class="px-[50px] py-[15px] border-2 border-yellow-500 hover:bg-yellow-500 hover:text-white font-bold flex items-center duration-300">
   
                <span class="text-[32px] material-symbols-outlined">
                    arrow_back
                </span>
                  Notes
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

            <span class="text-[32px] material-symbols-outlined">
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

        <span class="text-[32px] material-symbols-outlined">
            delete
        </span>
           Delete
    </a>
        </div>
@endsection
