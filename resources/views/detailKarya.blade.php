@extends('layouts.layout')

@section('title', 'Detail Karya')

@section('content')
    <h1>Detail Karya</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Judul Karya: {{ $karya->judulKarya }}</h5>
            <p class="card-text">Tema: {{ $karya->tema }}</p>
            <p class="card-text">Deskripsi: {{ $karya->deskripsi }}</p>
            <!-- Add more details as needed -->
        </div>
    </div>
@endsection
