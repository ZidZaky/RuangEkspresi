@extends('layouts.layout')

@section('title')
    Login
@endsection


@section('content')
    <style>
        body {
            background-color: #F2F2F2;
        }

        .container {
            display: flex;
            justify-content: space-around;
            padding-left: 50px;
            margin: 40px;
            gap: 50px;
        }

        .card {
            width: 18rem;

        }

        #profile {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        #card-img-top-only {
            padding-bottom: 10px;
            border-radius: 50%;
            max-width: 100px;
            max-height: 100px;
            width: 100px;
            height: 100px;
        }

        #for-dropdown {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            height: 250px;
            padding: 20px
        }

        .dropdown-center {
            width: inherit;
        }

        #dropdown-buttons {
            width: 250px;
            height: 50px;
            padding: 10px;
            background-color: white;
            border: none;
            color: black;
        }

        #buat-karya {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        #card-img-top-search {
            padding-bottom: 10px;
            border-radius: 50%;
            width: 55px;
            height: 55px;
        }

        #inp-karya {
            border: none;
            background-color: #F2F2F2;
            height: 50px;
            padding: 10px;
            border-radius: 10px;
            flex: 1;
            /* This makes the input take up the remaining space */
        }

        #lists {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        #horizontal-list {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        #horizontal-list li {
            margin-right: 20px;
            /* Adjust the spacing between list items */
        }

        #public-link {
            margin-left: auto;
            text-decoration: none;
            color: #000;
            background-color: white;
            border: none;
            /* Adjust the color as needed */
        }

        .tengah .card {
            margin-bottom: 20px;
        }

        #profile-owner-karya {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        #namaprofile {
            font-weight: bold;
            padding: 0;
            margin: 0;
        }

        #file-karya {
            max-width: 960px;
            max-height: 450px;
            border: black 1px solid;
            border-radius: 10px;
        }

        #lists-for-karya {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        #profile-chat {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        #events-lists {
            display: flex;
            align-items: center;
            gap: 10px;
        }

    </style>
    <div class="container">
        <div class="kiri">
            <div class="card" id="profile" style="align-content: center">
                <div class="wrapper" style="background-color: #F2F2F2; margin:15px; width: 16rem;">
                    <div class="card-body">
                        <img src="https://i.pinimg.com/236x/8b/e5/f5/8be5f5dcfc443bb0314c03208a687ea7.jpg"
                            id="card-img-top-only" class="card-img-top" alt="...">
                        <h5 class="card-title" style="padding: 0;margin:0">Profile Name</h5>
                        <p class="card-text">Profile Username</p>
                    </div>
                </div>
            </div>
            <div class="card" id="for-dropdown">
                <button class="btn btn-secondary" type="button" id="dropdown-buttons"
                    style="background-color: #708FFF; color:white">
                    Home
                </button>
                <div class="dropdown-center">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false" id="dropdown-buttons">
                        Karya
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Action two</a></li>
                        <li><a class="dropdown-item" href="#">Action three</a></li>
                    </ul>
                </div>
                <div class="dropdown-center">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false" id="dropdown-buttons">
                        Event
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Action two</a></li>
                        <li><a class="dropdown-item" href="#">Action three</a></li>
                    </ul>
                </div>
                <button class="btn btn-secondary" type="button" id="dropdown-buttons">
                    Community
                </button>
            </div>
        </div>
        <div class="tengah">
            <div class="card" style="width: 1000px">
                <div class="card-body">
                    <div id="buat-karya">
                        <img src="https://i.pinimg.com/236x/8b/e5/f5/8be5f5dcfc443bb0314c03208a687ea7.jpg"
                            id="card-img-top-search" class="card-img-top" alt="...">
                        <input type="text" name="buatkarya" id="inp-karya" placeholder="Apa karyamu hari ini ?">
                    </div>
                    <hr>
                    <div id="lists">
                        <ul id="horizontal-list">
                            <li>Image</li>
                            <li>Image/Video</li>
                            <li>Image/Video</li>
                        </ul>
                        <div class="dropdown">
                            <button id="public-link" class="btn btn-secondary dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Public
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Public</a></li>
                                <li><a class="dropdown-item" href="#">Private</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card" id="karya" style="width: 1000px">
                <div class="card-body">
                    <div id="profile-owner-karya">
                        <img src="https://i.pinimg.com/236x/8b/e5/f5/8be5f5dcfc443bb0314c03208a687ea7.jpg"
                            id="card-img-top-search" class="card-img-top" alt="...">
                        <div>
                            <p id="namaprofile" style="">Kevin Alumunium</p>
                            <p>22 august at 05:40 pm</p>
                        </div>
                    </div>
                    <img src="https://i.pinimg.com/236x/8b/e5/f5/8be5f5dcfc443bb0314c03208a687ea7.jpg" id="file-karya"
                        class="card-img-top" alt="...">
                    <hr>
                    <div id="lists-for-karya">
                        <ul id="horizontal-list">
                            <li>Likes</li>
                            <li>Comments</li>
                        </ul>
                        <div class="dropdown" style="display: none">
                            <button id="public-link" class="btn btn-secondary dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Public
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Public</a></li>
                                <li><a class="dropdown-item" href="#">Private</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" id="karya" style="width: 1000px">
                <div class="card-body">
                    <div id="profile-owner-karya">
                        <img src="https://i.pinimg.com/236x/8b/e5/f5/8be5f5dcfc443bb0314c03208a687ea7.jpg"
                            id="card-img-top-search" class="card-img-top" alt="...">
                        <div>
                            <p id="namaprofile" style="">Kevin Alumunium</p>
                            <p>22 august at 05:40 pm</p>
                        </div>
                    </div>
                    <img src="https://i.pinimg.com/236x/8b/e5/f5/8be5f5dcfc443bb0314c03208a687ea7.jpg" id="file-karya"
                        class="card-img-top" alt="...">
                    <hr>
                    <div id="lists-for-karya">
                        <ul id="horizontal-list">
                            <li>Likes</li>
                            <li>Comments</li>
                        </ul>
                        <div class="dropdown" style="display: none">
                            <button id="public-link" class="btn btn-secondary dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Public
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Public</a></li>
                                <li><a class="dropdown-item" href="#">Private</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" id="karya" style="width: 1000px">
                <div class="card-body">
                    <div id="profile-owner-karya">
                        <img src="https://i.pinimg.com/236x/8b/e5/f5/8be5f5dcfc443bb0314c03208a687ea7.jpg"
                            id="card-img-top-search" class="card-img-top" alt="...">
                        <div>
                            <p id="namaprofile" style="">Kevin Alumunium</p>
                            <p>22 august at 05:40 pm</p>
                        </div>
                    </div>
                    <img src="https://i.pinimg.com/236x/8b/e5/f5/8be5f5dcfc443bb0314c03208a687ea7.jpg" id="file-karya"
                        class="card-img-top" alt="...">
                    <hr>
                    <div id="lists-for-karya">
                        <ul id="horizontal-list">
                            <li>Likes</li>
                            <li>Comments</li>
                        </ul>
                        <div class="dropdown" style="display: none">
                            <button id="public-link" class="btn btn-secondary dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Public
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Public</a></li>
                                <li><a class="dropdown-item" href="#">Private</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="kanan">
            <div class="card" id="messages" style="margin-bottom: 15px; ">
                <div class="card-body">
                    <h5 class="card-title">Messages</h5>
                    <hr>
                    <div id="profile-chat">
                        <img src="https://i.pinimg.com/236x/8b/e5/f5/8be5f5dcfc443bb0314c03208a687ea7.jpg"
                            id="card-img-top-search" class="card-img-top" alt="...">
                        <div>
                            <p id="namaprofile" style="">Kevin Alumunium</p>
                            <p>Infokan Link Github</p>
                        </div>
                    </div>
                    <div id="profile-chat">
                        <img src="https://i.pinimg.com/236x/ed/4a/c1/ed4ac1776bb1b0d46f8e002e59d85995.jpg"
                            id="card-img-top-search" class="card-img-top" alt="...">
                        <div>
                            <p id="namaprofile" style="">Bagas Tambal Ban</p>
                            <p>Masuk Saudara</p>
                        </div>
                    </div>
                    <div id="profile-chat">
                        <img src="https://i.pinimg.com/236x/e5/39/dd/e539dd27797a7687757ba7d70e219ab9.jpg"
                            id="card-img-top-search" class="card-img-top" alt="...">
                        <div>
                            <p id="namaprofile" style="">Dimas ukin</p>
                            <p>gas saudaraku</p>
                        </div>
                    </div>
                    <div id="profile-chat">
                        <img src="https://i.pinimg.com/236x/28/f6/79/28f6790a12a9fd78e7df1804cb44da9b.jpg"
                            id="card-img-top-search" class="card-img-top" alt="...">
                        <div>
                            <p id="namaprofile" style="">Deo Dribble</p>
                            <p>Infokan Basketan</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card" id="events">
                <div class="card-body">
                    <h5 class="card-title">Events</h5>
                    <hr>
                    <div id="events-lists">
                        <div>
                            <p id="namaprofile" style="">Kevin Alumunium</p>
                        </div>
                    </div>
                    <div id="events-lists">
                        <div>
                            <p id="namaprofile" style="">Kevin Alumunium</p>
                        </div>
                    </div>
                    <div id="events-lists">
                        <div>
                            <p id="namaprofile" style="">Kevin Alumunium</p>
                        </div>
                    </div>
                    <div id="events-lists">
                        <div>
                            <p id="namaprofile" style="">Kevin Alumunium</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
