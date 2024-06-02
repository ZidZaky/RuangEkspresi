@extends('layouts.layout')

@section('title')
    Kalender Event
@endsection

@section('content')
<h2>Kalender Event</h2>

<h4>Aktifitas</h4>
{{-- <div class="activities-list">
    @for($i = 0; $i < 5; $i++)
    <div class="activity-item">
        <h3 class="activity-title">Festival Budaya</h3>
        <p class="activity-date">2 Januari - 2 Januari</p>
    </div>
    @endfor
</div> --}}

@foreach ($events as $event)
        @include('show-event')
        <button type="button" class="btn text-secondary d-flex gap-2 align-items-center p-0" data-bs-toggle="modal"
            data-bs-target="#show-event">
            <div class="post-body">
                <p>{{ $event->nama_event }}</p>
                <p>{{ $event->tanggal_mulai }} - </p> <p>{{ $event->tanggal_selesai }}</p>
            </div>
        </button>
    @endforeach

<style>
    .modal-header {
        position: relative;
    }
    .modal-title {
        width: 100%;
    }
    .btn-close {
        position: absolute;
        right: 10px;
        top: 10px;
    }
    .kalender-container {
        font-family: Arial, sans-serif;
        padding: 20px;
    }
    .kalender-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }
    .search-bar {
        display: flex;
        align-items: center;
        position: relative;
        width: 100%;
    }
    .search-input {
        padding: 8px 36px 8px 28px; /* Adjusted padding for icons */
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
        width: 100%;
    }
    .search-icon {
        position: absolute;
        left: 8px;
        font-size: 16px;
        color: #aaa;
    }
    .calendar-button {
        background: none;
        border: none;
        position: absolute;
        right: 8px;
        cursor: pointer;
        font-size: 16px;
        color: #aaa;
    }
    .calendar-icon {
        font-size: 20px;
    }
    h2 {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 10px;
    }
    .activities-list {
        display: flex;
        flex-direction: column;
    }
    .activity-item {
        background-color: #f0f0f0;
        padding: 15px;
        border-radius: 8px;
        margin-bottom: 10px;
    }
    .activity-title {
        margin: 0;
        font-size: 16px; /* Adjust font size as needed */
        font-weight: normal; /* Make text not bold */
    }
    .activity-date {
        margin: 0;
        font-size: 12px; /* Adjust font size as needed */
        color: #666;
    }
</style>
<!-- Add Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
@endsection