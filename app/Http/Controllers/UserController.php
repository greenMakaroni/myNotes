<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
        /**
     * Show the user register form.
     */
    public function create()
    {
        return view('register');
    }

     // Show login form
    public function login() {
        return view('login');
    }
    
    // Register user, save user data to the database
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        // Hash password 
        $formFields['password'] = bcrypt($formFields['password']);

        // Create user
        $user = User::create($formFields);

        // Login
        auth()->login($user);

        return redirect('/')->with('message', 'User logged in!');
    }

    // Logout user
    public function logout(Request $request) 
    {
        auth()->logout();

        // clear session data
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // redirect user to the root
        return redirect('/')->with('message', 'Logged out!');
    }

    // Authenticate user

}
