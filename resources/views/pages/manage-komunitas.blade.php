@extends('layouts.layout')

@section('sidebar')
    @include('components.sidebar')
@endsection


@section('content')
    <div class="container mt-5">
        {{-- Tombol untuk menambah komunitas baru --}}
        <h1>Admin Manage Komunitas Page</h1>

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
                @foreach ($komunitas as $k)
                    <tr>
                        <th scope="row">{{ $k->id_komunitas }}</th>
                        <td>{{ $k->nama_komunitas }}</td>
                        <td>{{ $k->deskripsi }}</td>
                        <td>
                            <a href="/komunitas/detail/{{ $k->id_komunitas }}" class="btn btn-warning">Show Detail</a>
                        </td>
                        <td>
                            <form action="/komunitas/{{$k->id_komunitas}}/admin/delete" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
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
