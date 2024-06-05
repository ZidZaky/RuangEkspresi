<style>
    .modal-dialog {
        max-width: fit-content;
        margin-left: auto;
        margin-right: auto;
    }
</style>
@include('forms.editKarya')
<!-- Modal Event -->
<div class="modal fade" id="detailKarya" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
    style="margin-left: 0;margin-right:120%;">
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
            <div class="modal-body">
                {{-- foto profil & Nama --}}
                <div><strong><img src="user-avatar.png" alt="User Avatar" width="30">{{ $user->username }}</strong>
                </div>
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
                <div class="comments">
                    <h3>Komentar</h3>
                    @php
                        $komentar = \App\Models\Komentar::where('karya_id', $karya->id_karya)->get();
                        // dd($komentar);
                    @endphp
                    <div class="comment">
                        @if ($komentar->isEmpty())
                            <p>Komentar Kosong</p>
                        @else
                            @foreach ($komentar as $kom)
                                <div class="user-info">
                                    {{-- foto profil komentar --}}
                                    <img src="user-avatar.png" alt="Foto Orang" width="30">
                                    <br>
                                    {{-- Komentar --}}
                                    <p>{{ $kom->pengguna_id }}: {{ $kom->komentar }}</p><br>
                                    <p>Tanggal Komentar: {{ $kom->tanggal_komentar }}</p>
                                    <br>
                                    @if (session('account')['id'] == $kom->pengguna_id)
                                        <form action="/komentar/{{ $kom->id }}" method="get"
                                            style="width: 100%;">
                                            @csrf
                                            <button class="btn btn-danger"
                                                style="width: auto; margin-top: 3px; margin-left: 5px">Delete</button>
                                        </form>
                                    @endif
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
