@extends('layout')

@section('content')

<header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-1">Register</h2>
    <p class="mb-4">Create an account to post notes</p>
  </header>

  <form method="POST" action="/users">
    @csrf
    <div class="mb-6">
      <label for="name" class="inline-block text-lg mb-2"> Name </label>
      <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name"  />

      @error('name')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-6">
      <label for="email" class="inline-block text-lg mb-2">Email</label>
      <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email"  />

      @error('email')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-6">
      <label for="password" class="inline-block text-lg mb-2">
        Password
      </label>
      <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password"
         />

      @error('password')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-6">
      <label for="password2" class="inline-block text-lg mb-2">
        Confirm Password
      </label>
      <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password_confirmation"
        />

      @error('password_confirmation')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-6">
        <button class="px-[50px] py-[15px] border-2 border-green-500 hover:bg-green-500 hover:text-white font-bold flex items-center duration-300"> 
            <span class="mr-[15px] text-[32px] material-symbols-outlined">
                person_add
            </span>
            Create Account
        </button>
    </div>

    <div class="mt-8">
      <p>
        Already have an account?
        <a href="/login" class="text-laravel">Login</a>
      </p>
    </div>
  </form>

@endsection