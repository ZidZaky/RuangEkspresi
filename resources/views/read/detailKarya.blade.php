<!-- detail karya -->
<div class="modal fade" id="detailKarya" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content" style="width:100%">
            <div class="row">
                <div class="col rounded-3">
                    <img src="storage/{{ $karya->namaFile }}" alt="" width="100%" height="100%" style="object-fit:cover;" class="">
                </div>
                    <button type="button" class="btn-close align-items-center d-flex position-absolute text-secondary mb-4" data-bs-dismiss="modal" aria-label="Close"><i class="fi fi-rr-cross d-flex"></i></button>
                <div class="col p-5">

                    <!-- Profile -->
                    <div class="profile d-flex justify-content-between align-items-center mb-3">
                        <div class="user d-flex gap-3 align-items-center">
                            <img src="/assets/images/profile.png" alt="" height="40px">
                            <div class="text m-0 p-0">
                                <p class="p-0 m-0">{{ $user->username }}</p>
                                <small class="text-secondary m-0 p-0">{{ $karya->created_at }}</small>
                            </div>
                        </div>

                        <div class="dropdown">
                            <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fi fi-rr-menu-dots d-flex"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a type="button" class="btn text-secondary d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#editKarya"><i class="fi fi-rr-edit d-flex"></i>Edit</a></li>
                                <li> @if ($karya->pengguna_id == session('account')['id'])
                                    <div>
                                        <form action="{{ route('karya.destroy', $karya->id_karya) }}" method="POST" style="width: 100%;">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn d-flex align-items-center gap-2 text-secondary"><i class="fi fi-rr-trash d-flex"></i>Delete</button>
                                        </form>
                                    </div>
                                    @endif</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- info -->
                    <div class="info">
                        <p class="m-0 text-secondary">Title: <span class="text-dark">{{ $karya->judulKarya }}</span></p>
                        <p class="m-0 text-secondary">Type: <span class="text-dark">{{ $karya->jenisKarya }}</span></p>
                        <p class="text-secondary">Description: <span class="text-dark">{{ $karya->deskripsi }}</span></p>
                    </div>
                    <hr class="border border-opacity-50">
                    <!-- Comment -->
                    <div class="comments">
                        <h6>Komentar</h6>
                        @php
                        $komentar = \App\Models\Komentar::where('karya_id', $karya->id_karya)->get();
                        @endphp
                        <div class="comment">
                            @if ($komentar->isEmpty())
                            <p class="text-secondary">Komentar Kosong</p>
                            @else
                            @foreach ($komentar as $kom)
                            <div class="user-info">
                                <img src="user-avatar.png" alt="Foto Orang" width="30">
                                <br>
                                <p>{{ $kom->pengguna_id }}: {{ $kom->komentar }}</p><br>
                                <p>Tanggal Komentar: {{ $kom->tanggal_komentar }}</p>
                                <br>
                                @if (session('account')['id'] == $kom->pengguna_id)
                                <form action="/komentar/{{ $kom->id }}" method="get" style="width: 100%;">
                                    @csrf
                                    <button class="btn btn-danger">Delete</button>
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
</div>
@include('forms.editKarya')