<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard', [
        'heading' => 'My Notes',
        'notes' => [
            [
                'id' => 1,
                'title' => 'My first note',
                'content' => 'Buy milk'
            ],
            [
                'id' => 2,
                'title' => 'My second note',
                'content' => 'Meeting with stakeholders at 2pm'
            ]
        ]
    ]);
});
