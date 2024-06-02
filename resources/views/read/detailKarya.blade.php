
<style>
    .modal-dialog{
        max-width: fit-content;
        margin-left: auto;
        margin-right: auto;
    }
</style>
<!-- Modal Event -->
<div class="modal fade" id="detailKarya" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-left: 0;margin-right:120%;">
    <div class="modal-dialog">
        <div class="modal-content" style="width: 50%;">
            <div class="modal-header" style="background-color:#708FFF;max-width:100%;">
                <form class="modal-title" data-bs-dismiss="modal">
                    <button type="submit" style="background-color:red;border:0;border-radius:10px;">Keluar</button>
                </form>
                <form action="/karya/{{ $karya->created_at }}/edit" class="hapus">
                    <button type="submit" style="background-color: yellow;border:0;border-radius:10px;" >Edit Postingan</button>
                </form>
            </div>
            <div class="modal-body"  >
                {{-- foto profil & Nama --}}
                <div><strong><img src="user-avatar.png" alt="User Avatar" width="30">{{ $user->username }}</strong></div>
                {{-- tanggal upload --}}
                <div>{{ $karya->created_at }}</div>
                {{-- Judul --}}
                <div class="post-title">{{ $karya->judulKarya }}</div>
                {{-- deskripsi --}}
                <div class="post-description">
                    {{-- kategori --}}
                    <strong>{{ $karya->jenisKarya }}</strong><br>
                    {{-- isi deskripsi --}}
                    {{ $karya->deskripsi }}
                    {{-- path gambar --}}
                    <img src="storage/{{ $karya->namaFile }}" alt="" style="width:100%;">
                </div>

            </div>

            <div>
                <div class="comments"> <h3>Komentar</h3>
                    <div class="comment">
                        <div class="user-info">
                            {{-- foto profil komentar --}}
                            <img src="user-avatar.png" alt="User Avatar" width="30">
                            <br>
                            {{-- Komentar --}}
                            <div>Zidan Platinum: I love This</div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
