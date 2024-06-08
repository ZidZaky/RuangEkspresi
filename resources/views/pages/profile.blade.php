@extends('layouts.layout')

@section('content')
    @php
        if (session('account') == null) {
            header('Location: login');
            exit();
        }
    @endphp
    <div class="profile bg-white">

    </div>
@endsection

@section('aside')
@endsection
