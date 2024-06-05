@extends('layouts.layout')

@section('sidebar')
    @include('components.sidebar')
@endsection


@section('content')
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
                        @if ($cek && ($cek->role == 'Admin' || $cek->role == 'owner'))
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#komunitas-edit{{ $komunitas->id_komunitas }}">
                                Edit
                            </button>
                            {{-- <a href="/komunitas/{{ $komunitas->id_komunitas }}/edit" class="btn btn-warning">Edit</a> --}}
                        @endif
                        @if ($cek)
                            <a href="/komunitas/post/{{ $komunitas->id_komunitas }}" class="btn btn-secondary">Show
                                Postingan</a>
                        @endif
                        <a href="/komunitas/anggota/{{ $komunitas->id_komunitas }}" class="btn btn-info">Show Anggota</a>
                        <a href="/komunitas/event/{{ $komunitas->id_komunitas }}" class="btn btn-light">Show Event</a>
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
@endsection

@section('aside')
    <style>
        .ranking {
            hr {
                border: var(--line);
            }

            .list-people {
                img {
                    height: 40px;
                }

                .text {
                    small {
                        font-size: 12px;
                    }
                }
            }
        }
    </style>
    <div class="ranking bg-white p-3 rounded">
        <h5>Top Influencers</h5>
        <hr>
        <div class="list-people d-flex flex-column gap-2">
            <div class="people d-flex gap-3 align-items-center">
                <img src="/assets/images/profile.png" alt="">
                <p class="fw-medium m-0 align-items-center">Zidan Platinum</p>
            </div>
            <div class="people d-flex gap-3 align-items-center">
                <img src="/assets/images/profile.png" alt="">
                <p class="fw-medium m-0 align-items-center">Deo Silver</p>
            </div>
            <div class="people d-flex gap-3 align-items-center">
                <img src="/assets/images/profile.png" alt="">
                <p class="fw-medium m-0 align-items-center">Kevin Aluminium</p>
            </div>
        </div>

    </div>
@endsection
