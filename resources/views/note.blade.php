@extends('layout')

@section('content')

    <div class="flex flex-col w-[100vw - 50px]">
        <div class="flex flex-row w-[100vw] justify-between">
            <h1 class="font-['Montserrat'] text-6xl mb-[50px] "> Note Preview </h1>   
            <a href="/"class="font-['Montserrat'] text-[12px] h-[60px] w-[150px] mx-[50px] px-[10px] py-[15px] border-2 border-yellow-500 hover:bg-yellow-500 hover:text-white font-bold flex justify-center items-center duration-300">
                <span class="mr-[15px] material-symbols-outlined">
                    arrow_back
                </span>
                My Notes
            </a>  
        </div>
        
        <div class="flex flex-row">
            <div class="overflow-scroll overflow-x-auto overflow-y-auto p-[50px] bg-yellow-100 h-[70vh] w-[50vw] mb-[100px] shadow-2xl flex flex-col">
                <h2 class="text-[36px] font-bold mb-[25px]">
                    {{$note->title}}
                </h2>
                <p class="text-[24px] italic">
                    {{$note->content}} 
                </p>
            </div>

            <div class="h-[70vh] flex flex-col justify-between items-center ml-[75px]">       
                <a href="{{$note->id}}/edit" class="font-['Montserrat'] h-[60px] w-[150px]  text-[12px] px-[10px] py-[15px] border-2 border-yellow-500 hover:bg-yellow-500 hover:text-white font-bold flex justify-center items-center duration-300">
                    <span class="mr-[15px] material-symbols-outlined">
                        edit
                    </span>
                    Edit
                </a>       
                <a href="{{$note->id}}/delete" class="font-['Montserrat'] h-[60px] w-[150px]  text-[12px] px-[10px] py-[15px] border-2 border-red-500 hover:bg-red-500 hover:text-white font-bold flex justify-center items-center duration-300">
                    <span class="mr-[15px] material-symbols-outlined">
                        delete
                    </span>
                    Delete
                </a>
            </div>
        </div>
    </div>
@endsection
