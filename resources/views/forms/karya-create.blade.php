<style>
    .modal-backdrop {
        opacity: 0.1 !important;
    }

    .modal {
        .modal-dialog {
            .modal-content {

                .modal-body {
                    form {
                        textarea {
                            background-color: var(--bg);
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
<div class="modal fade" id="karya" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-3">
            <div class="header-modal d-flex justify-content-between align-items-start">
                <div class="profile d-flex gap-3 mb-3 align-items-center">
                    <img src="/assets/images/profile.png" alt="" style="height:36px;">
                    <p class="m-0">{{ session('account')['username'] }}</p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <!-- form -->
                <form action="/karya" method="post" enctype="multipart/form-data" class="d-flex flex-column gap-1">
                    @csrf
                    <input type="number" name="idPengguna" id="" value="{{session('account')['id']}}" hidden>
                    <input type="text" name="judul" id="" placeholder="Tittle" class="form-control">
                    <input type="text" name="jenisKarya" id="" placeholder="Category" class="form-control">
                    <textarea name="deskripsi" id="deskripsi" class="form-control mb-2" rows="8" placeholder="Description"></textarea>
                    <div class="file d-flex justify-content-between align-items-center mb-3">
                        <p class="text-secondary m-0">Add to your post</p>
                        <input type="file" name="karya" id="" class="p-1 d-flex">
                    </div>

                    <button type="submit" class="btn p-2 d-block text-white">Post Karya</button>
                </form>
            </div>
        </div>
    </div>
</div>
@else
<div class="modal fade" id="karya" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
