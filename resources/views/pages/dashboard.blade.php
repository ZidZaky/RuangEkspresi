@extends('layouts.layout')

@section('sidebar')
@include('components.sidebar')
@endsection

@section('content')
@php
if (session('account') == null) {
header('Location: login');
exit();
}
@endphp
@include('forms.karya-create')
@include('forms.community-create')
<style>
    .post {

        .input {
            button {
                background-color: var(--bg);
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

    .post-item {

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
<div class="post rounded-3 mb-3 p-3 border border-secondary border-opacity-25 bg-white w-auto">
    <div class="input d-flex gap-3 align-item-center">
        <img src="/assets/images/profile.png" alt="" style="height:36px;">
        <button type="button" class="btn text-secondary align-items-center d-flex justify-content-between py-2 px-3 flex-grow-1" data-bs-toggle="modal" data-bs-target="#karya">What's new? <i class="fi fi-rr-grin-alt d-flex "></i></button>
    </div>
    <hr class="border border-secondary border-opacity-50">
    <div class="list-menu d-flex gap-4">
        <button type="button" class="btn text-secondary d-flex gap-2 align-items-center p-0" data-bs-toggle="modal" data-bs-target="#event"><i class="fi fi-rr-picture d-flex "></i>Image</button>
        <button type="button" class="btn text-secondary d-flex gap-2 align-items-center p-0" data-bs-toggle="modal" data-bs-target="#event"><i class="fi fi-rr-video-camera-alt d-flex"></i>Video</button>
        <button type="button" class="btn text-secondary d-flex gap-2 align-items-center p-0" data-bs-toggle="modal" data-bs-target="#event"><i class="fi fi-rr-link"></i>Link</button>
    </div>
</div>


<!-- post ini yang di loop -->
@foreach ($karyas as $karya)
@include('forms.create-komentar')
@php
$user = App\Models\Account::where('id', $karya->pengguna_id)->first();
@endphp
@include('read.detailKarya')
<button type="button" class="post-item text-secondary bg-white gap-2 rounded-3 p-4 border border-secondary border-opacity-25 w-100 mb-3" data-bs-toggle="modal" data-bs-target="#detailKarya">

    <!-- profile -->
    <div class="profile d-flex gap-3 mb-3">
        <img src="/assets/images/profile.png" alt="">
        <div class="text m-0 p-0 text-start ">
            <h6 class="p-0 m-0">{{ $user->username }}</h6>
            <small class="text-secondary m-0 p-0">{{ $karya->created_at }}</small>
        </div>
    </div>

    <!-- body -->
    <div class="post-body text-start text-dark">
        <p class="m-0 text-secondary">Tittle : <span class="text-dark">{{ $karya->judulKarya }}</span></p>
        <p class="m-0 text-secondary">Type : <span class="text-dark">{{ $karya->jenisKarya }}</span></p>
        <p class="text-secondary">Description : <span class="text-dark">{{ $karya->deskripsi }}</span></p>
        <img src="storage/{{ $karya->namaFile }}" alt="" class="rounded-3">
    </div>
    <hr>

    <!-- footer -->
    <div class="post-footer d-flex p-0 m-0 align-items-center">
        @php
        $komentar = \App\Models\Komentar::where('karya_id', $karya->id_karya)->get();
        @endphp
        <i type="button" class="fi fi-rr-beacon d-flex gap-2 align-items-center text-secondary" data-bs-toggle="modal" data-bs-target="#komentar">{{ $komentar->count() }}</i>
    </div>

</button>
@endforeach
@endsection


<!-- aside -->
@section('aside')
<style>
    .ranking {

        .list-people {
            img {
                height: 40px;
            }
        }
    }
</style>
<div class="ranking bg-white p-4 rounded-3 border border-secondary border-opacity-25">
    <h5>Members Team</h5>
    <hr class="border border-secondary border-opacity-25">
    <div class="list-people d-flex flex-column gap-2">
        <div class="leader mb-2">
            <p class="mb-1 fw-medium">Leader</p>
            <ul class="m-0">
                <li>Zidan</li>
            </ul>
        </div>

        <div class="documentation mb-2">
            <p class="mb-1 fw-medium">Documentation</p>
            <ul class="m-0">
                <li>Adelia</li>
                <li>Asty</li>
                <li>Farrel</li>
            </ul>
        </div>

        <div class="UI mb-2">
            <p class="mb-1 fw-medium">UI/UX - Front End</p>
            <ul class="m-0">
                <li>Deo</li>
                <li>Kevin</li>
            </ul>
        </div>

        <div class="backend mb-2">
            <p class="mb-1 fw-medium">Back End</p>
            <ul class="m-0">
                <li>Zidan</li>
                <li>Geovan</li>
            </ul>
        </div>

        <div class="de mb-2">
            <p class="mb-1 fw-medium">Database Engineer</p>
            <ul class="m-0">
                <li>Michael</li>
                <li>Dhanu</li>
            </ul>
        </div>

        <div class="ut mb-2">
            <p class="mb-1 fw-medium">User Testing</p>
            <ul class="m-0">
                <li>Naufal</li>
                <li>Enjina</li>
            </ul>
        </div>



    </div>

</div>
@endsection