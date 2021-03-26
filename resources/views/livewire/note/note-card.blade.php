<div class="row mt-4">
    @include('includes._toast_information')

    <div class="col-md-12 mb-4" wire:loading>
        <div class="text-center">
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    @forelse ($notes as $key => $note)
        <div class="col-sm-4 col-md-4 mb-4">
            <div class="card text-white bg-dark shadow">
                <div class="card-body">
                    <h5 class="card-title">{{ $note->title }}</h5>
                    <p class="card-text">{{ substr($note->description, 0, 40) }} ...</p>

                    <div class="text-end" style="display: block ruby;">
                        @livewire('note.note-delete', ['note' => $note], key(rand() * $note->id))

                        @livewire('note.note-edit', ['note' => $note], key(rand() * $note->id))
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="col-md-12">
            <div class="alert alert-light" role="alert">
                🏜️ No notes found
            </div>
        </div>
    @endforelse
</div>