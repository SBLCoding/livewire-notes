<?php

namespace App\Http\Livewire\Note;

use Livewire\Component;

use App\Models\Note;

class NoteEdit extends Component
{
    public $note;

    public function edit(Note $note)
    {
        $this->emit('loadNoteEdit', $note); //Emit event to NoteForm
    }

    public function render()
    {
        return view('livewire.note.note-edit');
    }
}
