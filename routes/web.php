<?php

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\UserController;
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

// Get all notes.
Route::get('/', [NoteController::class, 'index']);

// Show create form
Route::get('/notes/create', [NoteController::class, 'create'])->middleware('auth');

// Show edit form
Route::get('/notes/{note}/edit', [NoteController::class, 'edit'])->middleware('auth');

// Show delete prompt
Route::get('/notes/{note}/delete', [NoteController::class, 'delete'])->middleware('auth');

// Get single note, find note by id.
Route::get('/notes/{note}', [NoteController::class, 'show'])->middleware('auth');

// Store note in DB
Route::post('/notes', [NoteController::class, 'store'])->middleware('auth');

// Update note in DB
Route::put('/notes/{note}', [NoteController::class, 'update'])->middleware('auth');

// Delet note from DB
Route::delete('/notes/{note}', [NoteController::class, 'destroy'])->middleware('auth');

// Show register form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Create New User
Route::post('/users', [UserController::class, 'store'])->middleware('guest');

// Log in
Route::post('/users/authenticate', [UserController::class, 'authenticate'])->middleware('guest');

// Logout User
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');