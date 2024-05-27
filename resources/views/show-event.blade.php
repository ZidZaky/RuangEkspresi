@extends('layouts.layout')

@section('title')
    show-event
@endsection

@section('content')
<div class="container mt-4">
    <!-- Header -->
    <div class="header d-flex justify-content-between align-items-center rounded-top">
        <button class="btn btn-primary custom-btn" onclick="window.location.href='/logout'">Keluar</button>
        <h5 class="header-title">Postingan</h5>
        <button class="btn btn-primary custom-btn invisible">Hidden</button> <!-- This is to balance the space -->
    </div>

    <!-- Post -->
    <div class="post border rounded-0 p-3">
        <div class="post-header d-flex align-items-center mb-3">
            <img src="https://img.freepik.com/free-photo/3d-rendering-zoom-call-avatar_23-2149556785.jpg?t=st=1716558949~exp=1716562549~hmac=211ee1b1078120088091030a3c58c727926a85b13009c783363c0ae922dd6dd9&w=826" alt="Profile Picture" class="profile-pic">
            <div class="ms-2">
                <h5 class="mb-0">Kevin Aluminium</h5>
                <small class="text-muted">24 Mei 2024</small>
            </div>
        </div>
        <div class="post-body mb-3">
            <p><strong>Festival Budaya</strong></p>
            <p>Hari Raya Nyepi adalah salah satu perayaan paling sakral bagi umat Hindu di Indonesia, khususnya di Bali. Hari Raya Nyepi merupakan hari keheningan dan refleksi, di mana seluruh aktivitas duniawi dihentikan untuk memberikan kesempatan bagi introspeksi dan pembersihan diri.<br>2 Januari - 2 Januari</p>
            <img src="https://img.freepik.com/free-photo/nyepi-day-celebration-indonesia_23-2151325566.jpg?t=st=1716645509~exp=1716649109~hmac=567e37f2e805154ade7821b0b5545e71e67c464e7a86abec8261ad940969f29a&w=900" alt="Festival Budaya Poster" class="img-fluid mb-3">
            <p><strong>Komentar</strong></p>
        </div>
        <div class="post-footer">
            <div class="comment-section">
                <div class="comment mb-2">
                    <img src="https://img.freepik.com/free-photo/3d-rendering-zoom-call-avatar_23-2149556785.jpg?t=st=1716558949~exp=1716562549~hmac=211ee1b1078120088091030a3c58c727926a85b13009c783363c0ae922dd6dd9&w=826" alt="User Profile Picture" class="comment-profile-pic">
                    <div class="comment-body ms-2">
                        <h6 class="mb-0"><strong>Kevin Aluminium</strong></h6>
                        <small>Kelass BORRR</small>
                    </div>
                </div>
                <div class="comment mb-2">
                    <img src="https://img.freepik.com/premium-photo/face-shirtless-young-handsome-hispanic-man_251136-37722.jpg?w=360" alt="User Profile Picture" class="comment-profile-pic">
                    <div class="comment-body ms-2">
                        <h6 class="mb-0"><strong>Zidan Platinum</strong></h6>
                        <small>Aku sangat menantikan nyepiii</small>
                    </div>
                </div>
                <div class="comment mb-2">
                    <img src="https://img.freepik.com/free-vector/hand-drawn-side-profile-cartoon-illustration_23-2150517168.jpg?t=st=1716646577~exp=1716650177~hmac=bcdff507605943d1dd6e9dcc6e31a1bf7f1375dd63c7c721f2d296026f5f4ea1&w=740" alt="User Profile Picture" class="comment-profile-pic">
                    <div class="comment-body ms-2">
                        <h6 class="mb-0"><strong>Deo Icikiwir</strong></h6>
                        <small>Server Lain boleh join nonton ga bang??</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .container {
        max-width: 600px;
        margin: auto;
        font-family: Arial, sans-serif;
        margin-top: 30px; /* Adjusted top margin */
    }
    .header {
        background-color: #708FFf;
        color: white;
        padding: 2px;
        border-bottom: none;
        border-top-left-radius: 10px; /* Rounded top-left corner */
        border-top-right-radius: 10px; /* Rounded top-right corner */
    }
    .custom-btn {
        background-color: #708FFf;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 5px 10px; /* Adjusted padding to make button smaller */
        font-size: 0.875rem; /* Adjusted font size for button */
    }
    .custom-btn:hover {
        background-color: #5a67d8;
    }
    .header-title {
        font-size: 1rem; /* Adjusted font size for Postingan */
        margin: 0; /* Ensure no margin */
        padding: 5px 0; /* Adjusted padding to align vertically */
    }
    .post {
        background-color: #ffffff;
        padding: 10px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        margin-top: -1px; /* Ensure there is no gap between header and post */
        border-top-left-radius: 0; /* Remove top-left border radius */
        border-top-right-radius: 0; /* Remove top-right border radius */
    }
    .profile-pic {
        width: 50px;
        height: 50px;
        border-radius: 50%;
    }
    .post-header {
        border-bottom: 1px solid #dee2e6;
        padding-bottom: 10px;
    }
    .post-body {
        padding-top: 1px;
    }
    .post-footer {
        border-top: 1px solid #dee2e6;
        padding-top: 10px;
    }
    .comment-section {
        margin-top: 10px;
    }
    .comment {
        display: flex;
        align-items: center;
    }
    .comment-profile-pic {
        width: 40px;
        height: 40px;
        border-radius: 50%;
    }
    .comment-body {
        background-color: #F1F1F1;
        padding: 5px 10px;
        border-radius: 15px;
    }
    .invisible {
        visibility: hidden;
    }
</style>
@endsection