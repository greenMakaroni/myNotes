<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

// Feth Notes Routes:
// index - Show all notes
// show - Show single note
// create - Show form to create new note
// store - Store new note
// edit - Show form to edit note
// update - Update note
// destroy - Delete note

class NoteController extends Controller
{
    /**
     * Display all notes.
     */
    public function index()
    {
        return view('dashboard', [
            'notes' => Note::all()
        ]);
    }

    /**
     * Display single note.
     */
    public function show(Note $note)
    {
        return view('note', [
            'note' => $note
        ]);
    }

    /**
     * Show the form for creating a new note.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created note in MySQL db.
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
    }

    /**
     * Show the form for editing the specified note.
     */
    public function edit(Note $note)
    {
        //
    }

    /**
     * Update the specified note in MySQL database.
     */
    public function update(Request $request, Note $note)
    {
        //
    }

    /**
     * Remove the specified note from MySQL database.
     */
    public function destroy(Note $note)
    {
        //
    }
}
