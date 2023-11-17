@extends('layout')

@section('content')

<h1 class="text-6xl mb-[50px]"> Edit Note </h1>

<div class="flex col justify-center items-center">
    <form class="p-[25px]" method="POST" action="/notes/{{$note->id}}">
        @csrf 
        @method('PUT')
      <div class="mb-[50px] flex flex-col">
          <label class="text-xl" for="title"> Title </label>
          <input class="w-[50vw] border-2 p-[5px]" type="text" name="title" value="{{$note->title}}" />
          @error('title')
               <p class="text-red-700 text-xs mt-[5px]"> {{ $message }}</p>
          @enderror
      </div>
  
      <div class="mb-[50px] flex flex-col">
          <label class="text-xl" for="content"> Content </label>
          <textarea class="w-[50vw] border-2" name="content" id="content_textarea" cols="30" rows="10"
              placeholder="Something to remember..."
              >
              {{$note->content}}
          </textarea>
          @error('content')
              <p class="text-red-700 text-xs mt-[5px]"> {{ $message }}</p>
          @enderror
      </div>
  
      <div class="flex flex-row justify-between">
        
          <a href="/notes/{{$note->id}}"class="px-[50px] py-[15px] border-2 border-yellow-500 hover:bg-yellow-500 hover:text-white font-bold flex items-center duration-300">
       
          <span class="text-[32px] material-symbols-outlined">
              arrow_back
          </span>
             Leave
       </a>   
  
       <button class="px-[50px] py-[15px] border-2 border-green-500 hover:bg-green-500 hover:text-white font-bold flex items-center duration-300"> 
          <span class="text-[32px] material-symbols-outlined">
              edit
          </span>
          Apply Changes
      </button>
  
      </div>
     
     </form>
  
</div>


@endsection
