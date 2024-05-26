
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
                .modal-body{
                    form{
                        textarea{
                            background-color: #f2f2f2;
                        }

                        .file{
                            input[type="file"]{
                                height: fit-content;
                                width: auto;
                            }
                        }

                        button{
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
                    <img src="/assets/images/profile.png" alt="">
                    <p>Kevin Aluminium</p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <!-- form -->
                <form action="/karya" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="number" name="idPengguna" id="" value="{{session('account')['id']}}" hidden>
                    <input type="text" name="judul" id="" placeholder="What's The Theme?">
                    <textarea name="deskripsi" id="deskripsi" class="form-control mb-2" rows="8" placeholder="What's new?"></textarea>
                    <div class="file d-flex gap-3 justify-content-between align-items-center mb-4">
                        <p class="text-secondary d-flex">Add to your post</p>
                        <input type="file" name="karya" id="" class="form-control">
                    </div>
                    <input type="text" name="jenisKarya" id="" placeholder="Apa Jenis Karyamu?">

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
