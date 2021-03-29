<?php

namespace App\Http\Livewire\Note;

use Livewire\Component;

use App\Models\Note;

class NoteForm extends Component
{
    public $editFlag = false;

    public $buttonTextContent = "CREATE NOTE <i class='fas fa-plus'></i>";
    public $noteId;
    public $title;
    public $description;
    public $color = "#212529";

    protected $listeners = [
        'loadNoteEdit' => 'loadNoteEdit'
    ];

    protected $rules = [
        'title' => 'required',
        'description' => 'required'
    ];

    protected $messages = [
        'title.required' => 'Title is required.',
        'description.required' => 'Description is required.',
    ];

    public function loadNoteEdit(Note $note)
    {
        $this->editFlag = true;
        $this->buttonTextContent = "EDIT NOTE <i class='fas fa-pen'></i>";

        $this->noteId = $note->id;
        $this->title = $note->title;
        $this->description = $note->description;
        $this->color = $note->color;
    }

    public function cancelEdit()
    {
        $this->editFlag = false;
        $this->buttonTextContent = "CREATE NOTE <i class='fas fa-plus'></i>";

        $this->noteId = "";
        $this->title = "";
        $this->description = "";
        $this->color = "#212529";
    }

    public function submit()
    {
        $this->validate();

        if (empty($this->noteId)) {
            Note::create([
                'title' => $this->title,
                'description' => $this->description,
                'color' => $this->color
            ]);

            $this->emit('noteAdded', 'Note created succesfully.');
        }else {
            $note = Note::find($this->noteId);
            $note->title = $this->title;
            $note->description = $this->description;
            $note->color = $this->color;
            $note->save();

            $this->editFlag = false;
            $this->buttonTextContent = "CREATE NOTE <i class='fas fa-plus'></i>";
            $this->noteId = "";

            $this->emit('noteEdited', 'Note edit succesfully.');
        }

        $this->title = "";
        $this->description = "";
        $this->color = "#212529";
    }

    public function render()
    {
        return view('livewire.note.note-form');
    }
}
