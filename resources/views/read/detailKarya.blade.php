
<style>
    .modal-dialog{
        max-width: fit-content;
        margin-left: auto;
        margin-right: auto;
    }
</style>
@include('forms.editKarya')
<!-- Modal Event -->
<div class="modal fade" id="detailKarya" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-left: 0;margin-right:120%;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    <div>Detail Karya</div>
                    {{-- @php
                         dd($karya);
                    @endphp --}}
                    <div><a type="button" class="btn text-secondary" data-bs-toggle="modal"
                            data-bs-target="#editKarya"> Edit Postingan</a></div>
                    @if ($karya->pengguna_id == session('account')['id'])
                        <div>
                            <form action="{{ route('karya.destroy', $karya->id_karya) }}" method="POST"
                                style="width: 100%;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-warning"
                                    style="width: auto; margin-top: 3px; margin-left: 5px">Delete</button>
                            </form>
                        </div>
                    @endif

                </div>
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
