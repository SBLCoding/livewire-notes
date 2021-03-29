<div class="modal fade" id="modalNote{{ $note->id }}" tabindex="-1" aria-labelledby="modalNote{{ $note->id }}Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark text-white">
            <div class="modal-header" style="border-bottom: none;">
                <h5 class="modal-title" id="modalNote{{ $note->id }}Label">
                    {!! $note->title !!}
                </h5>

                <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <p>
                            {!! $note->description !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>