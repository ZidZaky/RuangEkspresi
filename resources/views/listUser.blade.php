@extends('layouts.layout')

@section('title', 'List User')

@section('content')
<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card-header {
            background: linear-gradient(#007bff, #0056b3);
            color: white;
            text-align: center;
            font-size: 1.5rem;
            padding: 1rem 0;
            margin: 1rem auto;
            width: 50%;
            border-radius: 20px;
        }

        .table {
            margin-top: 20px;
            border-radius: 20px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        }

        th, td {
            vertical-align: middle !important;
        }

        th {
            font-size: 1.25rem;
            font-weight: bold;
            background: linear-gradient(#007bff, #0056b3);
            color: white;
            padding: 10px;
            text-align: center;
        }

        td {
            font-size: 1rem;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card-header">List User</div>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($penggunas as $pengguna)
                    <tr>
                        <td>{{ $pengguna->username }}</td>
                        <td>{{ $pengguna->role }}</td>
                        <td>{{ $pengguna->status }}</td>
                        <td>{{ $pengguna->email }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
@endsection
