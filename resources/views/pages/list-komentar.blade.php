@extends('layouts.layout')

@section('title')
    List Komentar
@endsection

@section('content')
<h1>List Komentar Page</h1>

<table class="table bg-light border px-3 evt">
    <thead>
        <tr>
            <th>ID Komentar</th>
            <th>ID Pengguna</th>
            <th>ID Karya</th>
            <th>Komentar</th>
            <th>Tanggal Komentar</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    {{-- Cuma coba ngeluarin data  --}}
         @foreach ($komentarList as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->pengguna_id }}</td>
                <td>{{ $item->karya_id }}</td>
                <td>{{ $item->komentar }}</td>
                <td>{{ $item->tanggal_komentar }}</td>
                <td>
                    <div>
                        <a class="btn btn-danger btn-sm" onclick="return confirm ('Apakah anda yakin untuk menghapus komentar ini?')" href="/komentar/{{ $item->id }}">Delete</a>
                    </div>
                </td>
            </tr>
        @endforeach 
    </tbody>
</table>
    
@endsection