@extends('layouts.layout')

@section('sidebar')
    @include('components.sidebar')
@endsection

@section('content')
    <div class="container mt-5">
        {{-- Page Title --}}
        <h1 class="text-center">Admin Manage Komunitas Page</h1>

        <div class="row">
            @foreach ($komunitas as $k)
                <div class="col-12 mb-4">
                    <div class="card">
                        <div class="card-body d-flex justify-content-between">
                            <div>
                                <h5 class="card-title">{{ $k->nama_komunitas }}</h5>
                                <p class="card-text">{{ $k->deskripsi }}</p>
                            </div>
                            <div class="d-flex flex-column align-items-end">
                                <a href="/komunitas/detail/{{ $k->id_komunitas }}" class="btn btn-warning mb-2">Show Detail</a>
                                <form action="/komunitas/{{$k->id_komunitas}}/admin/delete" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin untuk menghapus komunitas ini?')">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
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
