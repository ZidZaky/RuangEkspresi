@extends('layouts.layout')

@section('title')
    Register
@endsection

@section('content')
    <div class="popup-container">
        <div class="popup-header">
            <img src="/path/to/avatar.jpg" alt="Avatar" class="avatar">
            <span class="username">Kevin Aluminium :
            <br>
            <select name="visibility" id="visibility" class="visibility-dropdown">
                <option value="public">Public</option>
                <option value="private">Private</option>
            </select>
            </span>

            <button class="close-btn">&times;</button>
        </div>
        <div class="popup-body">
            <form method="POST" action="/karya">
                @csrf
                <input type="number" name="idPengguna" id="idPengguna" value="{{session('account')['id']}}" hidden>

                <textarea name="judulKarya" id="judulKarya" placeholder="What do you think?" rows="4" class="input-text"></textarea>

                <div class="attachment-buttons">
                    <button type="button" class="attach-btn"> <img src="/path/to/avatar.jpg" class="Image">Image</button>
                    <button type="button" class="attach-btn"> <img src="/path/to/avatar.jpg" class="Image/Video">Image/Video</button>
                    <button type="button" class="attach-btn"> <img src="/path/to/avatar.jpg" class="Link">Image/Video</button>
                </div>

                <button type="submit" class="submit-btn">Kirim</button>
            </form>
        </div>
    </div>

    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .popup-container {
            width: 400px;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            position: relative;
            margin: 20px auto;
        }
        .popup-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }
        .username {
            font-size: 16px;
            margin-left: 10px;
            flex-grow: 1;
        }
        .visibility-dropdown {
            border: none;
            background-color: transparent;
            cursor: pointer;
            font-size: 14px;
        }
        .close-btn {
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
        }
        .popup-body {
            margin-top: 20px;
        }
        .input-text {
            width: 100%;
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 10px;
            resize: none;
            font-size: 14px;
            margin-bottom: 20px;
        }
        .attachment-buttons {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .attach-btn {
            background-color: #f1f1f1;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            flex: 1;
            margin-right: 5px;
            font-size: 14px;
        }
        .attach-btn:last-child {
            margin-right: 0;
        }
        .submit-btn {
            width: 100%;
            background-color: #708FFF;
            border: none;
            color: white;
            padding: 10px;
            text-align: center;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
@endsection
