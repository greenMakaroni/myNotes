@extends('layout')

@section('content')

  <header class="text-center">
    <h1 class="font-['Montserrat'] text-6xl mb-[50px]">Login</h1>
    <p class="font-['Montserrat']">Log into your account to post notes</p>
  </header>

  <form method="POST" action="/users/authenticate" class="w-[100vw - 50px] pt-[50px] flex flex-col justify-center items-center">
    @csrf
    <div class="w-[300px] mb-6">
      <label for="email" class="font-['Montserrat'] inline-block text-lg mb-2">Email</label>
      <input type="email" class="font-['Montserrat'] border border-gray-200 rounded p-2 w-full" name="email" value="{{old('email')}}" />

      @error('email')
        <p class="font-['Montserrat'] text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="w-[300px] mb-6">
      <label for="password" class="font-['Montserrat'] inline-block text-lg mb-2">
        Password
      </label>
      <input type="password" class="font-['Montserrat'] border border-gray-200 rounded p-2 w-full" name="password"
        value="{{old('password')}}" />

      @error('password')
      <p class="font-['Montserrat'] text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-2 mt-4">
      <button type="submit" class="font-['Montserrat'] text-[12px] mb-[100px] px-[50px] py-[15px] border-2 border-green-500 hover:bg-green-500 hover:text-white font-bold flex items-center duration-300">
        <span class="mr-[15px] material-symbols-outlined">
            login
        </span>
           Sign In
      </button>
    </div>

    <div class="mt-2">
      <p class="font-['Montserrat']">
        Don't have an account?
        <a href="/register" class="font-['Montserrat'] text-laravel">Register</a>
      </p>
    </div>
  </form>

  @endsection