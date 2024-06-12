<style>
    .modal-backdrop {
        opacity: 0.1 !important;
    }

    .modal {
        .modal-dialog {
            .modal-content {
                .header-modal {
                    img {
                        height: 52px;
                    }
                }

                .modal-body {
                    form {
                        textarea {
                            background-color: #f2f2f2;
                        }

                        .file {
                            input[type="file"] {
                                height: fit-content;
                                width: auto;
                            }
                        }

                        button {
                            background-color: var(--accent);
                            width: 100%;
                        }
                    }
                }
            }
        }
    }
</style>

<!-- Modal Karya -->
@if (session('account'))
<div class="modal fade" id="posting" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-3">
            <div class="header-modal d-flex justify-content-between align-items-start">
                <div class="profile d-flex gap-3 mb-3 align-items-center">
                    <img src="/assets/images/profile.png" alt="">
                    <p>Kevin Aluminium</p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <!-- form -->
                <form action="/posting" method="post" enctype="multipart/form-data" class="d-flex flex-column gap-2">
                    @csrf
                    <input type="text" name="komunitas_id" value="{{$komunitas->id_komunitas}}" hidden>
                    <input type="text" name="title" id="" placeholder="title" class="form-control">
                    <input type="text" name="deskripsi" id="" placeholder="Deskripsi" class="form-control">
                    <input type="file" name="foto" id="" class="form-control">
                    {{-- <button type="submit" class="btn p-2 d-block text-black outlon">Posting</button> --}}
                    <button type="submit" class="btn btn-danger p-2 text-black">Posting</button>

                </form>
            </div>
        </div>
    </div>
</div>
@else
<div class="modal fade" id="posting" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-3">
            <div class="header-modal d-flex justify-content-between align-items-start">
                <div class="profile d-flex gap-3 mb-3 align-items-center">
                    <p>Guest</p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <p>You Have To Sign In First</p>
            </div>
        </div>
    </div>
</div>
@endif
