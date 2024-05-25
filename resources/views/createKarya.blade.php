@extends('layouts.layout')

@section('title')
    Register
@endsection


@section('content')
    <h1>Buat Karya</h1>
    <form method="POST" action="/karya">
        @csrf
        <input type="number" name="idPengguna" id="idPengguna" value="{{session('account')['id']}}" hidden >

        <label for="judulKarya">judulKarya</label>
        <input type="text" name="judulKarya" id="judulKarya">
        <br>
        <label for="deskripsi">deskripsi</label>
        <input type="text" name="deskripsi" id="deskripsi">
        <br>
        <label for="tema">tema</label>
        <input type="text" name="tema" id="tema">
        <br>
        <button type="submit">Buat</button>
    </form>
    <style>

    </style>
@endsection
