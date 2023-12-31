@extends('layout')

@section('content')
        @auth
            {{-- Register / Logout bar --}}
            <div class="flex justify-end mb-[50px]">
                <form class="z-50 inline" method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="w-[200px] font-['Montserrat'] text-[12px] px-[25px] py-[15px] border-2  border-red-500  hover:bg-red-500  hover:text-white  font-bold  flex  justify-center items-center duration-300" >
                        <span class="mr-[15px] material-symbols-outlined">
                            logout
                        </span>
                        Logout
                    </button>
                </form>
            </div>


            {{-- App header --}}
            <div class="flex items-center justify-between flex-row">    
                <h1 class="font-['Montserrat'] text-6xl mb-[50px]"> My Notes </h1>
                <a href="/notes/create" class="w-[200px] font-['Montserrat'] text-[12px] px-[25px] py-[15px] border-2 border-green-500 hover:bg-green-500 hover:text-white font-bold flex justify-center items-center duration-300">
                    <span class="mr-[15px] material-symbols-outlined">
                        add
                    </span>
                    New Note
                </a>
            </div>
    
            {{-- Notes dashboard --}}
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
                <div class="w-[100vw] flex justify-center opacity-0 animate-displayMessage fixed top-5 z-20">
                    <p class="font-['Montserrat'] font-bold w-[33vw] flex justify-center bg-green-300  text-white font-bold px-[50px] py-[15px]">
                        {{session('message')}}
                    </p>
                </div>
            @endif  
        {{-- ELSE USER NOT AUTHENTICATED --}}
        @else
            <h1 class="w-[100vw] text-center font-['Montserrat'] text-6xl mt-[75px] "> My Notes </h1>
            <div class="flex flex-col w-[100vw] h-[100vh] p-[100px] justify-center items-center">
                <a href="/login" class="font-['Montserrat'] text-[12px] mb-[50px] w-[200px] px-[50px] py-[15px] border-2 border-green-500 hover:bg-green-500 hover:text-white font-bold flex items-center duration-300">
                    <span class="mr-[15px] material-symbols-outlined">
                        login
                    </span>
                    Login
                </a>   
                <a href="/register"class="font-['Montserrat'] text-[12px] w-[200px] px-[50px] py-[15px] border-2 border-blue-500 hover:bg-blue-500 hover:text-white font-bold flex items-center duration-300">
                    <span class="mr-[15px] material-symbols-outlined">
                        person_add
                    </span>
                    Register
                </a>  
            </div>
        @endauth

@endsection