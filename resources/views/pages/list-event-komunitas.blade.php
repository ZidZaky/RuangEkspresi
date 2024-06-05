@extends('layouts.layout')

@section('title')
    Admin Manage Event
@endsection

@section('content')
    @include('forms.create-event')
    <h1>Event Lists By Komunitas {{ $komunitas->nama_komunitas }}</h1>
    <a href="/komunitas/detail/{{ $komunitas->id_komunitas }}" class="btn btn-danger">Back</a>


    @php
        $cek = App\Models\Anggota::where('id_pengguna', session('account')['id'])->first();
        // dd($cek);
    @endphp
    @if ($cek && ($cek->role == 'Admin' || $cek->role == 'owner'))
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Add New Event
        </button>
    @endif
    <table class="table bg-light border px-3 evt">
        <thead>
            <tr>
                <th>Nama Event</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>Deskripsi Event</th>
                <th>Action</th>
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
                    <td><a class="btn btn-secondary btn-sm" href="/event/{{ $item->id_event }}">Show</a>

                        @if ($cek && ($cek->role == 'Admin' || $cek->role == 'owner'))
                            <form action="/event/{{ $item->id_event }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" type="submit"
                                    onclick="return confirm ('Apakah anda yakin untuk menghapus event ini?')">Delete</button>
                            </form>
                            <a class="btn btn-secondary btn-sm" href="/event/{{ $item->id_event }}">Edit</a>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
