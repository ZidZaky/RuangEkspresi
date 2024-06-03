@extends('layouts.layout')

@section('title', 'Daftar Pengguna')

@section('content')

<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .user-card {
            background: linear-gradient(135deg, #7996FF, #4E64B3, #435699);
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            margin-bottom: 20px;
            color: white;
        }

        .user-card img {
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .user-card h5 {
            font-size: 1.25rem;
            margin: 0;
        }

        .user-card p {
            margin: 5px 0;
            color: #ddd;
        }

        .edit-btn {
            background-color: white;
            color: #435699;
            border: 2px solid #435699;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
        }

        .edit-btn:hover {
            background-color: #435699;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="text-center mb-4">
            <h2>Daftar Pengguna</h2>
        </div>
        <div class="row">
            @foreach ($penggunas as $pengguna)
                <div class="col-md-4">
                    <div class="user-card">
                        <img src="{{ asset('storage/' . $pengguna->profile) }}" alt="{{ $pengguna->username }}" width="100">
                        <h5>{{ $pengguna->name }}</h5>
                        <p>{{ $pengguna->role }}</p>
                        <a href="#" class="edit-btn" data-bs-toggle="modal" data-bs-target="#editAccount-{{ $pengguna->id }}">Edit Status</a>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="editAccount-{{ $pengguna->id }}" tabindex="-1" aria-labelledby="editAccountLabel-{{ $pengguna->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editAccountLabel-{{ $pengguna->id }}">Edit Status</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                @include('forms.account-status-edit', ['pengguna' => $pengguna])
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
@endsection
