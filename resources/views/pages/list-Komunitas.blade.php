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
@include('forms.komunitas-create')

<div class="list-community d-flex flex-column gap-3">
    <div class="header d-flex justify-content-between align-items-center bg-white rounded-3 border border-opacity-25 p-3">
        <h5 class="m-0">Community</h5>
        <button type="button" class="btn d-flex align-items-center gap-2 fw-medium" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #E8EDFF;color: var(--accent);">
            <i class="fi fi-rr-plus d-flex align-items-center"></i>Create Community
        </button>
    </div>

    <div class="list">
        @foreach ($komunitas as $k)

        @php
        $cek = App\Models\Anggota::where('komunitas_id', $k->id_komunitas)
        ->where('id_pengguna', session('account')['id'])
        ->first();
        @endphp

        @if ($cek && $cek->role == 'owner')
        <a href="/komunitas/detail/{{ $k->id_komunitas }}" class="item bg-white p-3 rounded-3 border border-opacity-25 d-flex text-decoration-none ">
            <div class="information d-flex flex-column justify-content-start gap-1">
                <small class="badge text-dark fw-normal d-flex rounded" style="width: fit-content; background-color: #D6D6D6;">Owner</small>
                <h6 class="m-0 text-dark">{{ $k->nama_komunitas }}</h6>
            </div>
        </a>



        @elseif ($cek)
        <a href="/komunitas/detail/{{ $k->id_komunitas }}" class="item bg-white p-3 rounded-3 border border-opacity-25 d-flex text-decoration-none ">
            <div class="information d-flex flex-column justify-content-start gap-1">
                <small class="badge fw-normal d-flex rounded" style="width: fit-content; background-color: #D8E8FF;color: #0D6EFD;">Member</small>
                <h6 class="m-0 text-dark">{{ $k->nama_komunitas }}</h6>
            </div>
            <form action="/komunitas/{{ $k->id_komunitas }}/exit" method="POST">
                @csrf
                <input type="number" name="id_pengguna" id="" value="{{ session('account')['id'] }}" hidden>
                <button type="submit" class="btn btn-danger">Exit</button>
            </form>
        </a>
        @else
        <div class="divider d-flex justify-content-between align-items-center my-3">
            <hr class="flex-grow-1">
            <small class="mx-2 text-secondary">Or</small>
            <hr class="flex-grow-1">
        </div>

        <form action="/komunitas/{{ $k->id_komunitas }}/join" method="POST" class="d-flex justify-content-center">
            @csrf
            <input type="number" name="id_pengguna" id="" value="{{ session('account')['id'] }}" hidden>
            <button type="submit" class="btn text-white fw-medium" style="background-color: var(--accent);">Join Community</button>
        </form>
        @endif

        @endforeach
    </div>

</div>
@endsection



<!-- aside -->
@section('aside')
@include('components.aside')
@endsection