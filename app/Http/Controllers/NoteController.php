<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
     * Show delete prompt
     */
    public function delete(Note $note) {
        return view('delete', [
            'note' => $note
        ]);
    }

    /**
     * Store a newly created note in MySQL db.
     */
    public function store(Request $request)
    {
        // validate data
        $formFields = $request->validate([
            'title' => ['required'],
            'content' => 'required'
        ]);

        // store note in database
        Note::create($formFields);

        return redirect('/')->with('message', 'Note Created!');
    }

    /**
     * Show the form for editing the specified note.
     */
    public function edit(Note $note)
    {
        return view('edit', ['note' => $note]);
    }

    /**
     * Update the specified note in MySQL database.
     */
    public function update(Request $request, Note $note)
    {
        $formFields = $request->validate([
            'title' => ['required'],
            'content' => 'required'
        ]);

        $note->update($formFields);

        return redirect('/')->with('message', 'Note Updated!');
    }

    /**
     * Remove the specified note from MySQL database.
     */
    public function destroy(Note $note)
    {
        $note->delete();
        return redirect('/')->with('message', 'Note Deleted!');
    }
}
