@extends('layouts.layout')

@section('title')
    Kalender Event
@endsection

@section('content')
<h2>Kalender Event</h2>

<h4>Aktifitas</h4>
{{-- <div class="activities-list">
    @for($i = 0; $i < 5; $i++)
    <div class="activity-item">
        <h3 class="activity-title">Festival Budaya</h3>
        <p class="activity-date">2 Januari - 2 Januari</p>
    </div>
    @endfor
</div> --}}

@foreach ($events as $event)
        @include('show-event')
        <button type="button" class="btn text-secondary d-flex gap-2 align-items-center p-0" data-bs-toggle="modal"
            data-bs-target="#show-event">
            <div class="post-body">
                <p>{{ $event->nama_event }}</p>
                <p>{{ $event->tanggal_mulai }} - </p> <p>{{ $event->tanggal_selesai }}</p>
            </div>
        </button>

    @endforeach
    <div class="row g-0 text-center-left " style="background-color:#F2F2F2;padding-top:3.5%;padding-bottom:2.5%;border-radius:10px;border-size:10px;border-style: solid;border-color:#666666;">
        <div class="col" style="margin-left:2.5%;">
            <h4>Judul</h4>
            <p>Bulan ini</p>
        </div>
    </div>
    <div class="row g-0 text-center-left " style="background-color:#F2F2F2;padding-top:3.5%;padding-bottom:2.5%;border-radius:10px;border-size:10px;border-style: solid;border-color:#666666;">
        <div class="col" style="margin-left:2.5%;">
            <h4>Judul</h4>
            <p>Bulan ini</p>
        </div>
    </div>
    <h2 class="bulan">Juni</h2>
    <div class="line"></div>
    <div class="row g-0 text-center-left " style="background-color:#F2F2F2;padding-top:3.5%;padding-bottom:2.5%;border-radius:10px;border-size:10px;border-style: solid;border-color:#666666;">
        <div class="col" style="margin-left:2.5%;">
            <h4>Judul</h4>
            <p>Juni</p>
        </div>
    </div>
    <h2 class="bulan">Juli</h2>
    <div class="line"></div>
    <div class="row g-0 text-center-left " style="background-color:#F2F2F2;padding-top:3.5%;padding-bottom:2.5%;border-radius:10px;border-size:10px;border-style: solid;border-color:#666666;">
        <div class="col" style="margin-left:2.5%;">
            <h4>Judul</h4>
            <p>Juli</p>
        </div>
    </div>

<style>
    .row{
        margin-top:2.5%;margin-bottom:2.5%
    }
    .line{
        width: 15%;
        border: 3px;
        border-style:solid;
    }
</style>
<!-- Add Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
@endsection
