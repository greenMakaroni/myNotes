<?php

use App\Http\Controllers\NoteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Note;
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
Route::get('/notes/create', [NoteController::class, 'create']);

// Get single note, find note by id.
Route::get('/notes/{note}', [NoteController::class, 'show']);
