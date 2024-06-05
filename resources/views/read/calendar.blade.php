

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

@php
    $calendar = \App\Models\Event::all();
@endphp
<!-- Modal -->
<div class="modal fade" id="calendarModal" tabindex="-1" aria-labelledby="calendarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <h1 class="modal-title fs-5 text-center fw-bold" id="calendarModalLabel">Kalender</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="kalender-container">
                    <div class="kalender-header">
                        <div class="search-bar">
                            <input type="text" placeholder="Search" class="search-input">
                            <i class="fas fa-search search-icon"></i>
                            <button class="calendar-button">
                                <i class="fas fa-calendar-alt calendar-icon"></i>
                            </button>
                        </div>
                    </div>

                    <h2>Aktifitas</h2>
                    <div class="activities-list">
                        @foreach($calendar as $event)
                        <div class="activity-item">
                            <h3 class="activity-title">{{$event->nama_event}}</h3>
                            <p class="activity-date">{{$event->tanggal_mulai}} - {{$event->tanggal_selesai}}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
