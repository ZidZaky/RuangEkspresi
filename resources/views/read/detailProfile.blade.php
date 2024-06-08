@extends('layouts.layout')

@section('title', 'Detail Profile')

@section('content')
@include('forms.editAccount')
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #ffffff;
}

.post {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 910px;
    margin-left: -270px;
}

.user-info {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}

.user-info img {
    margin-right: 20px;
}

.postdesk {
    background-color: red;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 430px;
    height: 200px;
}

.desk h3 {
    font-weight: bold;
    font-size: 17px;
}

.desk p {
    font-size: 14px;
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

.postt {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    margin-left: -272px;
    margin-right: 128px;
}

h5 {
    margin-left: -270px;
    margin-top: 20px;
    margin-bottom: 10px;
    font-weight: bold;
}
</style>

<div class="post">
    <div class="user-info">
        @if (session('account')['profile'] == null)
        <img src="/assets/images/profile.png" alt="" style="max-width:50px">
        @else
        <img src="/storage/{{ session('account')['profile'] }}" alt="" style="max-width:50px; margin: 10px;">
        @endif
        <div>
            <div><strong>{{ $pengguna->username }}</strong></div>
            <div>Account Created At : {{ $pengguna->created_at }}</div>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editProfile">
                Ubah Profil
            </button>
        </div>
    </div>
</div>
<h5>Your Post</h5>

<div class="postt">
    @foreach ($karyas as $karya)
    @include('forms.create-komentar')
    @php
    $user = App\Models\Account::find($karya->pengguna_id);
    @endphp
    <div class="list-post bg-white rounded p-3 mb-3">
        <div class="profile d-flex gap-3 mb-3">
            <img src="/storage/{{ session('account')['profile'] }}" alt="">
            <div class="text m-0 p-0">
                <h6 class="p-0 m-0">{{ $user->username }}</h6>
                <small class="text-secondary m-0 p-0">{{ $karya->created_at }}</small>
            </div>
        </div>
        <div class="post-body">
            <p>{{ $karya->judulKarya }}</p>
            <img src="/storage/{{ $karya->namaFile }}" alt="">
            <p>{{ $karya->deskripsi }}</p>
            <p>{{ $karya->jenisKarya }}</p>
        </div>
        <hr>
        <div class="post-footer d-flex p-0 m-0 align-items-center">
            @php
            $komentar = \App\Models\Komentar::where('karya_id', $karya->id_karya)->get();
            @endphp
            <i type="button" class="fi fi-rr-beacon d-flex gap-2 align-items-center text-secondary"
                data-bs-toggle="modal" data-bs-target="#komentar">{{ $komentar->count() }}
            </i>
        </div>
    </div>
    @endforeach
</div>

<!-- <div class="postdesk">
    <table class="user-info-table">
        <div class="desk">
            <h3>About</h3>
            <hr>
            <p>Lorem ipsum dolor sit amet consectetur. Accumsan et morbi dui egestas consequat in. </p>
            <p>Diam enim in tortor enim vel feugiat feugiat. Accumsan duis viverra cursus eu nibh in ultrices malesuada.
            </p>
        </div>
    </table>
</div> -->

@endsection