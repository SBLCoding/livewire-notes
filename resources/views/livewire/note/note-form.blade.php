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

        <div class="col-md-8 offset-md-2 mb-2">
            <div class="inputRadioColor">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="color" id="colorNoteA" value="#212529" wire:model="color">
                    <label class="form-check-label" for="colorNoteA" style="background-color: #212529;"></label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="color" id="colorNoteB" value="#01a3a4" wire:model="color">
                    <label class="form-check-label" for="colorNoteB" style="background-color: #01a3a4;"></label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="color" id="colorNoteC" value="#341f97" wire:model="color">
                    <label class="form-check-label" for="colorNoteC" style="background-color: #341f97;"></label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="color" id="colorNoteD" value="#10ac84" wire:model="color">
                    <label class="form-check-label" for="colorNoteD" style="background-color: #10ac84;"></label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="color" id="colorNoteE" value="#cd6133" wire:model="color">
                    <label class="form-check-label" for="colorNoteE" style="background-color: #cd6133;"></label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="color" id="colorNoteF" value="#227093" wire:model="color">
                    <label class="form-check-label" for="colorNoteF" style="background-color: #227093;"></label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="color" id="colorNoteG" value="#6D214F" wire:model="color">
                    <label class="form-check-label" for="colorNoteG" style="background-color: #6D214F;"></label>
                </div>
            </div>
        </div>

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

    <style>
        .inputRadioColor {
            margin: 5px 0px;
            text-align: center;
        }

        .inputRadioColor input {
            position: absolute;
            left: 0;
            top: -300%;
            opacity: 0;
            visibility: hidden;
        }

        .inputRadioColor input:checked + label {
            border-color: #6CA1AD;
            opacity: 1;
        }

        .inputRadioColor input:checked + label:after {
            content: "";
            opacity: 1;
        }

        .inputRadioColor label {
            width: 26px;
            color: #fff;
            height: 26px;
            line-height: 26px;
            border-radius: 26px;
            display: inline-block;
            position: relative;
            border: 0px solid #535151;
            cursor: pointer;
            text-align: center;
            opacity: 0.8;
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
        }

        .inputRadioColor label:after {
            /*content: "";*/
            position: absolute;
            left: 50%;
            margin-left: -7px;
            top: 50%;
            margin-top: -7px;
            font: normal normal normal 14px FontAwesome;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
            -webkit-transition: opacity 0.3s ease-in-out;
            moz-transition: opacity 0.3s ease-in-out;
            o-transition: opacity 0.3s ease-in-out;
        }
    </style>
</div>
