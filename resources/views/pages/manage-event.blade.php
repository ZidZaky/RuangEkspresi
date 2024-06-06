@extends('layouts.layout')

@section('sidebar')
    @include('components.sidebar')
@endsection

@section('content')
<h1 class="text-center">Admin Manage Event Page</h1>

<!-- Button to create new event -->
<div class="d-flex mb-3">
    <a href="event/create" class="btn btn-primary ms-auto">Create Data</a>
</div>

<div class="row">
    @foreach ($eventList as $item)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title"><strong>{{ $item->nama_event }}</strong></h5>
                    <p class="card-text">
                        <strong>Tanggal Mulai:</strong> {{ $item->tanggal_mulai }}<br>
                        <strong>Tanggal Selesai:</strong> {{ $item->tanggal_selesai }}<br>
                        <strong>Deskripsi:</strong> {{ $item->deskripsi_event }}
                    </p>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <a class="btn btn-warning" href="/event/{{ $item->id_event }}">Show</a>
                    <form action="/event/{{ $item->id_event }}" method="POST" class="d-inline">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Apakah anda yakin untuk menghapus event ini?')">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
