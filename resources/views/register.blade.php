@extends('layout')

@section('content')

  <header class="text-center">
    <h1 class="font-['Montserrat'] text-6xl mb-[15px] mt-[25px]">Register</h1>
    <p class="font-['Montserrat'] mb-[25px]">Create an account to post notes.</p>
  </header>

  <form method="POST" action="/users" class="w-[100vw - 50px] pt-[50px] flex flex-col justify-center items-center">
    @csrf
    <div class="w-[300px] mb-6">
      <label for="name" class="font-['Montserrat'] inline-block text-lg mb-2"> Name </label>
      <input value="{{old('name')}}" type="text" class="font-['Montserrat'] border border-gray-200 rounded p-2 w-full" name="name"  />

      @error('name')
      <p class="font-['Montserrat'] text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="w-[300px] mb-6">
      <label for="email" class="font-['Montserrat'] inline-block text-lg mb-2">Email</label>
      <input value="{{old('email')}}" type="email" class="font-['Montserrat'] border border-gray-200 rounded p-2 w-full" name="email"  />

      @error('email')
      <p class="font-['Montserrat'] text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="w-[300px] mb-6">
      <label for="password" class="font-['Montserrat'] inline-block text-lg mb-2">
        Password
      </label>
      <input type="password" class="font-['Montserrat'] border border-gray-200 rounded p-2 w-full" name="password" />
      @error('password')
        <p class="font-['Montserrat'] text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="w-[300px] mb-6">
      <label for="password2" class="font-['Montserrat'] inline-block text-lg mb-2">
        Confirm Password
      </label>
      <input type="password" class="font-['Montserrat'] border border-gray-200 rounded p-2 w-full" name="password_confirmation" />

      @error('password_confirmation')
        <p class="font-['Montserrat'] text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-[15px] mt-3">
      <button class="font-['Montserrat'] flex justify-center items-center text-[12px] w-[300px] px-[50px] py-[15px] border-2 border-green-500 hover:bg-green-500 hover:text-white font-bold flex items-center duration-300"> 
          <span class="mr-[15px] material-symbols-outlined">
              person_add
          </span>
          Create Account
      </button>
    </div>

    <div class="mt-8">
      <p class="font-['Montserrat'] ">
        Already have an account?
        <a href="/login" class="font-['Montserrat'] text-laravel">Login</a>
      </p>
    </div>
  </form>

@endsection