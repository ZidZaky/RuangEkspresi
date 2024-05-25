@extends('layouts.layout')

@section('title', 'Edit Karya')

@section('content')
    <h1>Edit Karya</h1>
    <form method="POST" action="{{ route('karya.update', $karya->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="judulKarya">Judul Karya</label>
            <input type="text" name="judulKarya" id="judulKarya" value="{{ old('judulKarya', $karya->judulKarya) }}" class="form-control">
            @error('judulKarya')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <br>

        <div class="form-group">
            <label for="tema">Tema</label>
            <input type="text" name="tema" id="tema" value="{{ old('tema', $karya->tema) }}" class="form-control">
            @error('tema')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <br>

        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <input type="text" name="deskripsi" id="deskripsi" value="{{ old('deskripsi', $karya->deskripsi) }}" class="form-control">
            @error('deskripsi')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <br>

        <button type="submit" class="btn btn-primary">Update Data</button>
    </form>
@endsection
