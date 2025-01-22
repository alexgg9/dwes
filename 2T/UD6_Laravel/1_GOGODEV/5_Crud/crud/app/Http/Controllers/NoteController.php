<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\NoteRequest;

class NoteController extends Controller
{
    //crea index
    public function index()
    {
        //obtenemos todas las notas
        $notes = Note::all();

        //retornamos la vista con las notas, la función compact nos permite pasar variables a la vista en un array asociativo  
        return view('note.index', compact('notes'));
    }

    //crea create, donde se pasa una vista para que cree una nota
    public function create() : View
    {
        return view('note.create')->with('success', 'Nota created successfully');
    }

    public function store(NoteRequest $request) : RedirectResponse
    {
        /*
        1.
        $note = new Note();
        $note->title = $request->title;
        $note->description = $request->description;
        $note->save();

        2.
        $note = Note::create(
            [
                'title' => $request->title,
                'description' => $request->description
            ]
        );
        */


        Note::create($request->all());

        return redirect()->route('note.index')->with('success', 'Nota updated successfully');
    }

    public function edit(Note $note) : View
    {
       //$note = Note::find($id);  NO NECESARIO. Lo hace de forma implícita
        return view('note.edit', compact('note'));
    }

    public function update(NoteRequest $request, Note $note) : RedirectResponse
    {

        $note->update($request->all());
        return redirect()->route('note.index');
    }

    public function show(Note $note) : View
    {
        return view('note.show', compact('note'));
    }

    public function destroy (Note $note) : RedirectResponse
    {
        $note->delete();
        return redirect()->route('note.index')->with('danger', 'Nota deleted successfully');
    }
}
