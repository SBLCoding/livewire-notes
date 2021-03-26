<div class="row mt-4">
    <form wire:submit.prevent="submit">
        <div class="col-md-8 offset-md-2 mb-2">
            <input 
                class="form-control form-control-sm" 
                name="title" 
                id="title" 
                type="text" 
                placeholder="Title" 
                autocomplete="off"
                wire:model="title">

            @error('title')
                <div id="emailHelp" class="form-text">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="col-md-8 offset-md-2 mb-2">
            <textarea 
                class="form-control form-control-sm" 
                name="description" 
                id="description"
                cols="10" 
                rows="2" 
                placeholder="Description" 
                autocomplete="off" 
                wire:model="description"></textarea>

            @error('description')
                <div id="emailHelp" class="form-text">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <input 
            class="form-control" 
            name="noteId" 
            id="noteId" 
            type="hidden" 
            wire:model="noteId">

        <div class="col-md-8 offset-md-2">
            <div class="d-grid">
                <button type="submit" class="btn btn-dark btn-sm rounded-pill">{!! $buttonTextContent !!}</button>
            </div>

            @if($editFlag)
                <div class="d-grid mt-1">
                    <button type="button" class="btn btn-danger btn-sm rounded-pill" wire:click="cancelEdit">CANCEL</button>
                </div>
            @endif
        </div>
    </form>
</div>
