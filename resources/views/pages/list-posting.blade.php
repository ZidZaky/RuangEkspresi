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
    <div class="container mt-5">
        {{-- Tombol untuk menambah posting baru --}}
        @include('forms.post-create')
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#posting">
            Add New Posting
        </button>

        {{-- Tabel Posting --}}
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Foto</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posting as $p)
                    <tr>
                        <th scope="row">{{ $p->id }}</th>
                        <td>{{ $p->title }}</td>
                        <td>{{ $p->deskripsi }}</td>
                        <td>
                            <form action="/posting/{{ $p->id }}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Are you sure ?')">Delete</button>
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
