<?php

namespace App\Http\Livewire\Note;

use Livewire\Component;

use App\Models\Note;

class NoteDelete extends Component
{
    public $note;

    public function delete(Note $note)
    {
        $note->delete();

        $this->emitUp('noteDeleted', 'Note deleted succesfully.');
    }

    public function render()
    {
        return view('livewire.note.note-delete');
    }
}
