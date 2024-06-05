@extends('layouts.layout')

@section('sidebar')
    @include('components.sidebar')
@endsection

@section('content')
    @include('forms.karya-create')
    @include('forms.community-create')
    <style>
        .post {
            background-color: #fff;
            width: auto;

            .input {
                button {
                    background-color: var(--bg);
                    flex: 1;
                }
            }

            .list-menu {

                button {
                    i {
                        display: flex;
                    }
                }
            }
        }

        .list-post {
            .profile {
                img {
                    height: 44px;
                }
            }

            hr {
                border: var(--line);
            }

            .post-body {

                img {
                    width: 100%;
                    max-height: 500px;
                }

            }

            .post-footer {
                i {
                    height: fit-content;

                }
            }
        }
    </style>

    <!-- ini add post -->
    <div class="post rounded-3 mb-3 p-3 border border-secondary border-opacity-25">
        <div class="input d-flex gap-3 align-item-center">
            <img src="/assets/images/profile.png" alt="" style="height:36px;">
            <button type="button" class="btn text-secondary align-items-center d-flex justify-content-between p-2"
                data-bs-toggle="modal" data-bs-target="#karya">What's new? <i class="fi fi-rr-grin-alt d-flex "></i></button>
        </div>
        <hr class="border border-secondary border-opacity-50">
        <div class="list-menu d-flex gap-4">
            <button type="button" class="btn text-secondary d-flex gap-2 align-items-center p-0" data-bs-toggle="modal"
                data-bs-target="#event"><i class="fi fi-rr-picture d-flex "></i>Image</button>
            <button type="button" class="btn text-secondary d-flex gap-2 align-items-center p-0" data-bs-toggle="modal"
                data-bs-target="#event"><i class="fi fi-rr-video-camera-alt d-flex"></i>Video</button>
            <button type="button" class="btn text-secondary d-flex gap-2 align-items-center p-0" data-bs-toggle="modal"
                data-bs-target="#event"><i class="fi fi-rr-link"></i>Link</button>
        </div>
    </div>


    <!-- post ini yang di loop -->
    @foreach ($karyas as $karya)
        @include('forms.create-komentar')
        @php
            $user = App\Models\Account::where('id', $karya->pengguna_id)->first();
        @endphp
        @include('read.detailKarya')
        <button type="button" class="btn text-secondary d-flex gap-2 align-items-center p-0" data-bs-toggle="modal"
            data-bs-target="#detailKarya">
            <div class="list-post bg-white rounded p-3 mb-3">
                <div class="profile d-flex gap-3 mb-3">
                    <img src="/assets/images/profile.png" alt="">
                    <div class="text m-0 p-0 ">
                        <h6 class="p-0 m-0">{{ $user->username }}</h6>
                        <small class="text-secondary m-0 p-0">{{ $karya->created_at }}</small>
                    </div>
                </div>
                <div class="post-body">
                    <p>{{ $karya->judulKarya }}</p>
                    <img src="storage/{{ $karya->namaFile }}" alt="">
                    <p>{{ $karya->deskripsi }}</p>
                    <p>{{ $karya->jenisKarya }}</p>
                </div>
                <hr>
                <div class="post-footer d-flex p-0 m-0 align-items-center">
                    @php
                        $komentar = \App\Models\Komentar::where('karya_id', $karya->id_karya)->get();
                        // dd($komentar);
                    @endphp
                    <i type="button" class="fi fi-rr-beacon d-flex gap-2 align-items-center text-secondary"  data-bs-toggle="modal"
                    data-bs-target="#komentar">{{ $komentar->count()}}
                         </i>
                    {{-- <a  class="btn text-secondary d-flex gap-2 align-items-center p-0">Komentar</a> --}}


                </div>
            </div>
        </button>
    @endforeach
@endsection

@section('aside')
    <style>
        .ranking {
            hr {
                border: var(--line);
            }

            .list-people {
                img {
                    height: 40px;
                }

                .text {
                    small {
                        font-size: 12px;
                    }
                }
            }
        }
    </style>
    <div class="ranking bg-white p-3 rounded">
        <h5>Top Influencers</h5>
        <hr>
        <div class="list-people d-flex flex-column gap-2">
            <div class="people d-flex gap-3 align-items-center">
                <img src="/assets/images/profile.png" alt="">
                <p class="fw-medium m-0 align-items-center">Zidan Platinum</p>
            </div>
            <div class="people d-flex gap-3 align-items-center">
                <img src="/assets/images/profile.png" alt="">
                <p class="fw-medium m-0 align-items-center">Deo Silver</p>
            </div>
            <div class="people d-flex gap-3 align-items-center">
                <img src="/assets/images/profile.png" alt="">
                <p class="fw-medium m-0 align-items-center">Kevin Aluminium</p>
            </div>
        </div>

    </div>
@endsection
