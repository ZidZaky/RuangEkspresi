@extends('layouts.layout')

@section('title', 'Detail Profile')

@section('content')
    @include('forms.editAccount')
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #8ba4ff;
            padding: 10px 20px;
            color: white;
        }

        .post {
            background-color: white;
            margin: 20px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .user-info {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .user-info img {
            border-radius: 50%;
            margin-right: 10px;
        }

        .post-title {
            font-size: 24px;
            margin: 10px 0;
        }

        .post-description {
            font-size: 16px;
            margin: 10px 0;
        }

        .post-image {
            width: 100%;
            border-radius: 10px;
        }

        .comments {
            margin-top: 20px;
        }

        .comment {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 0;
            border-top: 1px solid #e0e0e0;
        }

        .comment:first-child {
            border-top: none;
        }

        .comment img {
            border-radius: 50%;
            margin-right: 10px;
        }

        .delete-button {
            color: red;
            cursor: pointer;
        }

        .hapus {
            background-color: red;
            color: white;
            cursor: pointer;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .keluar {
            background-color: blue;
            color: white;
            cursor: pointer;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .user-info-table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        .user-info-table td,
        .user-info-table th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        .user-info-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .user-info-table th {
            background-color: #4CAF50;
            color: white;
        }

        .user-info-table td p {
            margin: 0;
        }
    </style>
    <div class="header">
        <div><a href="/dashboard" class="keluar"> Keluar</a></div>
        <div>Detail Profile</div>
        <div><button type="button" class="btn text-secondary d-flex gap-2 align-items-center p-0" data-bs-toggle="modal"
                data-bs-target="#editProfile"><i class="fi fi-rr-picture d-flex "></i>Edit</button></div>
    </div>

    <div class="post">
        <div class="user-info">
            @if (session('account')['profile'] == null)
                <img src="/assets/images/profile.png" alt="" style="max-width:50px">
            @else
                <img src="/storage/{{ session('account')['profile'] }}" alt="" style="max-width:50px">
            @endif
            <div>
                <div><strong>{{ $pengguna->username }}</strong></div>
                <div>Account Created At : {{ $pengguna->created_at }}</div>
            </div>
        </div>
        {{-- <div class="post-title">{{$pengguna->email}}</div> --}}
        <div>
            <table class="user-info-table">
                <tr>
                    <th>Username</th>
                    <td>
                        <p>{{ $pengguna->username }}</p>
                    </td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>
                        <p>{{ $pengguna->email }}</p>
                    </td>
                </tr>
                <tr>
                    <th>Role</th>
                    <td>
                        <p>{{ $pengguna->role }}</p>
                    </td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>
                        <p>{{ $pengguna->status }}</p>
                    </td>
                </tr>
            </table>
        </div>

    </div>
@endsection
