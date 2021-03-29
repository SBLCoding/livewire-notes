<div class="toast-container position-absolute top-0 end-0 p-3" style="z-index: 5">
    <div id="liveToast" class="toast hide align-items-center text-black bg-light bg-gradient" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                {{ session('message') }}
            </div>

            <button type="button" class="btn-close btn-close-black me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
</div>