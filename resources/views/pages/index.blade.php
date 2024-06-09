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
            border: var(--line);

            .input {

                img {
                    height: 52px;
                }

                button {
                    background-color: #f2f2f2;
                    display: flex;
                    align-items: center;
                    flex: 1;
                }
            }

            hr {
                border: var(--line);
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
    <div class="post mb-3 p-3 rounded-3">
        <div class="input d-flex gap-3 align-item-center">
            <img src="/assets/images/profile.png" alt="">
            <button type="button" class="btn text-secondary align-items-center d-flex justify-content-between"
                data-bs-toggle="modal" data-bs-target="#karya">What's new? <i class="fi fi-rr-grin-alt d-flex "></i></button>
        </div>
        <hr>
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
        @php
            $user = App\Models\Account::where('id', $karya->pengguna_id)->first();
        @endphp
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
                <i class="fi fi-rr-beacon d-flex gap-2 align-items-center text-secondary">1.355 Comment</i>
            </div>
        </div>
    @endforeach
@endsection

@section('aside')
@include('components.aside')
@endsection
