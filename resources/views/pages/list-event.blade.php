@extends('layouts.layout')

@section('title')
    Admin Manage Event
@endsection

@section('content')
<h1>Event Lists</h1>

<table class="table bg-light border px-3 evt">
    <thead>
        <tr>
            <th>Nama Event</th>
            <th>Tanggal Mulai</th>
            <th>Tanggal Selesai</th>
            <th>Deskripsi Event</th>
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
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
