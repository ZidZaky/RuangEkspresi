@extends('layouts.layout')

@section('title')
    Admin Manage Event
@endsection

@section('content')
<h1>Admin Manage Event Page</h1>

<div class="d-flex ms-auto">
    <a href="event/create" class="btn btn-primary">Create Data</a>
</div>

<table class="table bg-light border px-3 evt">
    <thead>
        <tr>
            <th>Nama Event</th>
            <th>Tanggal Mulai</th>
            <th>Tanggal Selesai</th>
            <th>Deskripsi Event</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    {{-- Cuma coba ngeluarin data  --}}
         @foreach ($eventList as $item)
            <tr>
                <td>{{ $item->nama_event }}</td>
                <td>{{ $item->tanggal_mulai }}</td>
                <td>{{ $item->tanggal_selesai }}</td>
                <td>{{ $item->deskripsi_event }}</td>
                <td>
                    <div>
                        <a class="btn btn-secondary btn-sm" href="/event/{{ $item->id_event }}">Show</a>
                        <a class="btn btn-warning btn-sm" href="/event/{{ $item->id_event }}/edit">Edit</a>

                        <form action="/event/{{ $item->id_event }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" type="submit" onclick="return confirm ('Apakah anda yakin untuk menghapus event ini?')">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach 
    </tbody>
</table>
    
@endsection