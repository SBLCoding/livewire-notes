<?php

namespace App\Http\Livewire\Note;

use Livewire\Component;

use App\Models\Note;

class NoteCard extends Component
{
    protected $listeners = [
        'noteAdded' => 'showMessage',
        'noteDeleted' => 'showMessage',
        'noteEdited' => 'showMessage'
    ];

    public function showMessage($message)
    {
        session()->flash('message', $message);
        $this->dispatchBrowserEvent('showToast');
    }

    public function render()
    {
        return view('livewire.note.note-card', ['notes' => Note::all()]);
    }
}
