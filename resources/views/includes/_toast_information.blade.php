<div class="toast-container position-absolute bottom-0 end-0 p-3" style="z-index: 5">
    <div id="liveToast" class="toast hide align-items-center text-white bg-dark" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                {{ session('message') }}
            </div>

            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
</div>