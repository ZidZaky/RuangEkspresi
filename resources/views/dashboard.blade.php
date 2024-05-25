@extends('layouts.layout')

@section('title', 'Login')

@section('content')
    @if (!session()->has('account'))
        <script>
            window.location = "/account/login";
        </script>
    @else
        @foreach (['success', 'error'] as $msg)
            @if (session($msg))
                <div class="alert alert-{{ $msg == 'success' ? 'success' : 'danger' }} alert-dismissible fade show" role="alert">
                    {{ session($msg) }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        @endforeach

        <h1>Ini dashboard</h1>
        <a class="btn btn-warning" href="/logout" role="button">Logout</a>
        <a class="btn btn-primary" href="/karya/create" role="button">Buat Karya</a>

        @if (isset($karyas) && $karyas->count())
            <table class="table table-striped mt-4">
                <thead>
                    <tr>
                        <th>ID Karya</th>
                        <th>Judul Karya</th>
                        <th>Tema</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($karyas as $karya)
                        <tr>
                            <td>{{ $karya->id }}</td>
                            <td>{{ $karya->judulKarya }}</td>
                            <td>{{ $karya->tema }}</td>
                            <td>{{ $karya->deskripsi }}</td>
                            <td>
                                <a class="btn btn-sm btn-info" href="/karya/edit/{{$karya->id}}">Edit</a>
                                <br>
                                <a href="/karya/show/{{$karya->id}}">Show Detail Karya</a>

                                <form action="/karya/{{ $karya->id }}" method="POST" style="display:inline-block;">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="mt-4">No karya found.</p>
        @endif
    @endif
@endsection
