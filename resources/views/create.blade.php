@extends('layout')

@section('content')

<h1 class="text-6xl mb-[50px]"> Create Note </h1>

   <form class="p-[25px]" method="POST" action="/notes">
      @csrf 
    <div class="mb-[50px] flex flex-col">
        <label class="text-xl" for="title"> Title </label>
        <input class="border-2" type="text" name="title" />
    </div>

    <div class="mb-[50px] flex flex-col">
        <label class="text-xl" for="content"> Content </label>
        <textarea class="border-2" name="content" id="content_textarea" cols="30" rows="10"
        placeholder="Something to remember...">

        </textarea>
    </div>

    <button class="border-2 font-bold px-[50px] py-[20px] duration-300 hover:bg-yellow-100 hover:shadow-xl"> Create note </button>
   </form>

@endsection
