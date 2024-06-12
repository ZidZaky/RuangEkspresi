@extends('layouts.layout')

@section('sidebar')
    @include('components.sidebar')
@endsection


@section('content')
    @php
        if (session('account') == null) {
            header('Location: login');
            exit();
        }
    @endphp
    @include('forms.komunitas-edit')
    <div class="container mt-5">
        <a href="/komunitas" class="btn btn-danger">Back</a>

        {{-- Tabel komunitas --}}
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Komunitas</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Edit</th> <!-- Added Edit column header -->
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <th scope="row">{{ $komunitas->id_komunitas }}</th>
                    <td>{{ $komunitas->nama_komunitas }}</td>
                    <td>{{ $komunitas->deskripsi }}</td>
                    <td>
                        @php
                            $cek = App\Models\Anggota::where('komunitas_id', $komunitas->id_komunitas)
                                ->where('id_pengguna', session('account')['id'])
                                ->first();
                        @endphp
                        @if ($cek && ($cek->role == 'owner'))
                            <button type="button" class="btn btn-primary btn-custom" data-bs-toggle="modal"
                                data-bs-target="#komunitas-edit{{ $komunitas->id_komunitas }}">
                                Edit
                            </button>
                        @endif
                        @if ($cek)
                            <a href="/komunitas/post/{{ $komunitas->id_komunitas }}"
                                class="btn btn-secondary btn-custom">Show Postingan</a>
                        @endif
                        <a href="/komunitas/anggota/{{ $komunitas->id_komunitas }}" class="btn btn-info btn-custom">Show
                            Anggota</a>
                        <a href="/komunitas/event/{{ $komunitas->id_komunitas }}" class="btn btn-light btn-custom">Show
                            Event</a>
                    </td>

                    <td>
                        @if (@$cek->role == 'owner')
                            <p>You Cant Exit Your Own Komunitas</p>
                        @else
                            @if ($cek)
                                <form action="{{ route('anggota.exit', $komunitas->id_komunitas) }}" method="POST">
                                    @csrf
                                    <input type="number" name="id_pengguna" id=""
                                        value="{{ session('account')['id'] }}" hidden>
                                    <button type="submit" class="btn btn-danger">Exit</button>
                                </form>
                            @else
                                <form action="{{ route('anggota.join', $komunitas->id_komunitas) }}" method="POST">
                                    @csrf
                                    <input type="number" name="id_pengguna" id=""
                                        value="{{ session('account')['id'] }}" hidden>
                                    <button type="submit" class="btn btn-primary">Join</button>
                                </form>
                            @endif
                        @endif

                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <style>
        .btn-custom {
            margin: 5px;
            /* Adds space between buttons */
            border-radius: 8px;
            /* Rounds the corners */
            font-weight: bold;
            /* Makes the text bold */
            transition: background-color 0.3s ease, transform 0.3s ease;
            /* Adds a transition effect */
        }

        .btn-custom:hover {
            transform: scale(1.05);
            /* Slightly enlarges the button on hover */
            opacity: 0.9;
            /* Reduces opacity slightly on hover */
        }

        .btn-primary {
            background-color: #007bff;
            /* Primary button color */
            border-color: #007bff;
            /* Primary button border color */
        }

        .btn-secondary {
            background-color: #6c757d;
            /* Secondary button color */
            border-color: #6c757d;
            /* Secondary button border color */
        }

        .btn-info {
            background-color: #17a2b8;
            /* Info button color */
            border-color: #17a2b8;
            /* Info button border color */
        }

        .btn-light {
            background-color: #f8f9fa;
            /* Light button color */
            border-color: #f8f9fa;
            /* Light button border color */
            color: #212529;
            /* Light button text color */
        }
    </style>
@endsection

@section('aside')
    @include('components.aside')
@endsection
