<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
        /**
     * Show the user register form.
     */
    public function create()
    {
        return view('register');
    }




}
