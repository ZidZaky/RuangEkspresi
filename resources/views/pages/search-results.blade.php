@extends('layouts.layout')

@section('sidebar')
@include('components.sidebar')
@endsection

@section('content')
<div class="container p-0 d-flex flex-column gap-3">
    <h5 class="m-0">Search Results for "{{ $keyword }}"</h5>
    <div class="people bg-white border border-opacity-25 rounded-3 p-3">
        <h5>People</h5>
        @if ($penggunas->isEmpty())
        <p class="m-0">No pengguna found.</p>
        @else
        <ul class="m-0">
            @foreach ($penggunas as $pengguna)
            <li class="m-0">{{ $pengguna->username }}</li>
            @endforeach
        </ul>
        @endif
    </div>

    <div class="events bg-white border border-opacity-25 rounded-3 p-3">
        <h5>Events</h5>
        @if ($events->isEmpty())
        <p class="m-0 text-secondary">No events found.</p>
        @else
        <ul class="m-0">
            @foreach ($events as $event)
            <li class="m-0">{{ $event->nama_event }} - {{ $event->deskripsi_event }}</li>
            @endforeach
        </ul>
        @endif
    </div>

    <div class="Community bg-white border border-opacity-25 rounded-3 p-3">
        <h5>Community</h5>
        @if ($komunitas->isEmpty())
        <p class="m-0 text-secondary">No community found.</p>
        @else
        <ul class="m-0">
            @foreach ($komunitas as $komun)
            <li class="m-0">{{ $komun->nama_komunitas }} - {{ $komun->deskripsi }}</li>
            @endforeach
        </ul>
        @endif
    </div>
</div>

@endsection

@section('aside')
@include('components.aside')
@endsection