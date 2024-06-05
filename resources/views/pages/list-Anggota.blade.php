@extends('layouts.layout')

@section('sidebar')
    @include('components.sidebar')
@endsection

@section('content')
    @include ('forms.komunitas-create')

    <div class="container mt-5">
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    @php
                        $cek = App\Models\Anggota::where('id_pengguna', session('account')['id'])->first();
                    @endphp
                    @if ($cek)
                        @if ($cek->role == 'owner' || $cek->role == 'Admin')
                            <th scope="col">Ubah Role</th>
                        @endif
                    @endif
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <a href="/komunitas/detail/{{$id_komunitas}}" class="btn btn-danger">Back</a>

                @foreach ($anggota as $a)
                    @php
                        $detail = App\Models\Account::where('id', $a->id_pengguna)->first();
                    @endphp
                    <tr>
                        <th scope="row">{{ $detail->username }}</th>
                        <td>{{ $detail->email }}</td>
                        <td>{{ $a->role }}</td>
                        @if ($cek)
                            @if ($cek->role == 'owner' || $cek->role == 'Admin')
                                <td>
                                    <form action="{{ route('anggota.destroy', $a->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        @if ($a->role != 'owner')
                                            <button type="submit" class="btn btn-danger">Kick</button>
                                        @endif
                                    </form>
                                </td>
                            @endif
                            <td>
                                @if ($cek)
                                    @if ($a->role != 'owner' && ($cek->role == 'owner' || $cek->role == 'Admin'))
                                        <form action="{{ route('anggota.update', $a->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <select name="role" id="role">
                                                <option value="" selected disabled>Pilih peran</option>
                                                <option value="Anggota">Anggota</option>
                                                <option value="Admin">Admin</option>
                                            </select>
                                            <button type="submit" class="btn btn-warning">Oke</button>
                                        </form>
                                    @else
                                        <p>Anda Tidak Memiliki Akses</p>
                                    @endif
                                @endif
                        @endif
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
