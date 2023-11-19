@extends('layout')

@section('content')

    <div class="flex row justify-between w-[100vw - 50px]">
        <h1 class="font-['Montserrat'] text-6xl mb-[25px]"> Create Note </h1>
        <a href="/"class="font-['Montserrat'] text-[12px] h-[60px] w-[150px] px-[10px] py-[15px] border-2 border-yellow-500 hover:bg-yellow-500 hover:text-white font-bold flex justify-center items-center duration-300">
            <span class="mr-[15px] material-symbols-outlined">
                arrow_back
            </span>
                My Notes
        </a>   
    </div>
   
    <div class="flex col justify-center items-center">
        <form class="p-[25px]" method="POST" action="/notes">
            @csrf 
            <div class="w-[300px] mb-[50px] flex flex-col">
                <label class="font-['Montserrat'] text-xl" for="title"> Title </label>
                <input class="font-['Montserrat'] p-[5px] border-2" type="text" name="title" />
                @error('title')
                    <p class="font-['Montserrat'] text-red-700 text-xs mt-[5px]"> {{ $message }}</p>
                @enderror
            </div>
    
            <div class="w-[300px] mb-[50px] flex flex-col">
                <label class="font-['Montserrat'] text-xl" for="content"> Content </label>
                <textarea class="font-['Montserrat'] border-2" name="content" id="content_textarea" cols="30" rows="10"
                placeholder="Something to remember...">
        
                </textarea>
                @error('content')
                    <p class="font-['Montserrat'] text-red-700 text-xs mt-[5px]"> {{ $message }}</p>
                @enderror
            </div>
        
            <div class="flex flex-row justify-center items-center">
                <button class="w-[300px] font-['Montserrat'] text-[12px] px-[10px] py-[15px] border-2 border-green-500 hover:bg-green-500 hover:text-white font-bold flex justify-center items-center duration-300"> 
                    <span class="mr-[15px] material-symbols-outlined">
                        edit
                    </span>
                    Create Note
                </button>
            </div>
        </form>
    </div>
    
@endsection
