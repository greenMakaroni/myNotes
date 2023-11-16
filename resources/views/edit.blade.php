@extends('layout')

@section('content')

<h1 class="text-6xl mb-[50px]"> Edit Note </h1>

   <form class="p-[25px]" method="POST" action="/notes/{{$note->id}}">
      @csrf 
      @method('PUT')
    <div class="mb-[50px] flex flex-col">
        <label class="text-xl" for="title"> Title </label>
        <input class="border-2" type="text" name="title" value="{{$note->title}}" />
        @error('title')
             <p class="text-red-700 text-xs mt-[5px]"> {{ $message }}</p>
        @enderror
    </div>

    <div class="mb-[50px] flex flex-col">
        <label class="text-xl" for="content"> Content </label>
        <textarea class="border-2" name="content" id="content_textarea" cols="30" rows="10"
            placeholder="Something to remember..."
            >
            {{$note->content}}
        </textarea>
        @error('content')
            <p class="text-red-700 text-xs mt-[5px]"> {{ $message }}</p>
        @enderror
    </div>

    <button 
        class=
            "border-2 
            font-bold 
            px-[50px] 
            py-[20px] 
            uration-300 
            hover:bg-yellow-100 
            hover:shadow-xl"> 

        Edit note </button>
   </form>

@endsection
