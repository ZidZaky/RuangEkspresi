<style>
    /* Modal Header */
    .modal-header {
        border-bottom: none;
        padding: 15px 20px;
        background-color: #f8f9fa;
    }

    .modal-header h5 {
        color: #343a40;
        font-weight: bold;
    }

    .modal-header .btn-close {
        color: #6c757d;
        font-size: 1.5rem;
    }

    /* Modal Body */
    .modal-body {
        padding: 20px;
    }

    .modal-body img {
        max-width:900px;
        border-radius: 50%;
    }

    .modal-body h4 {
        color: #343a40;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .modal-body p {
        color: #6c757d;
        margin-bottom: 0;
    }

    /* Modal Footer */
    .modal-footer {
        border-top: none;
        padding: 15px 20px;
        background-color: #f8f9fa;
    }

    .modal-footer .btn {
        color: #fff;
        background-color: #6c757d;
        border-color: #6c757d;
    }

    .modal-footer .btn:hover {
        background-color: #5a6268;
        border-color: #545b62;
    }
</style>
<div class="modal fade" id="postingModal" tabindex="-1" aria-labelledby="postingModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="postingModalLabel">Posting</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if ($posting)
                    @foreach ($posting as $p)
                        <div class="d-flex align-items-center mb-3">
                            <img src="/storage/{{ $p->foto }}" alt="Post Image" class="rounded-2 me-3"
                                style="max-width: 50px;">
                            <div>
                                <h4 class="mb-0">{{ $p->title }}</h4>
                                <p class="mb-0 text-secondary">Deskripsi:</p>
                                <p>{{ $p->deskripsi }}</p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h4 class="mb-0">Postingan Kosong</h4>
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

