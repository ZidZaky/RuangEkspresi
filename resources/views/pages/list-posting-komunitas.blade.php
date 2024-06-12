@extends('layouts.layout')

@section('title')
    Admin Manage Posting
@endsection

@section('content')
    @php
        if (session('account') == null) {
            header('Location: login');
            exit();
        }
    @endphp
    @include('forms.post-create')
    <h1>Post Lists By Komunitas {{ $komunitas->nama_komunitas }}</h1>
    <a href="/komunitas/detail/{{ $komunitas->id_komunitas }}" class="btn btn-danger">Back</a>


    @php
        $cek = App\Models\Anggota::where('id_pengguna', session('account')['id'])->first();
        // dd($cek);
    @endphp
    @if ($cek && ($cek->role == 'Admin' || $cek->role == 'owner'))
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#posting">
            Add New Post
        </button>
    @endif
    <hr>
    {{-- Cuma coba ngeluarin data  --}}
    @foreach ($posting as $item)
        <div class="container" style="border:4px solid black;border-radius:10px;margin-top:5px;">
            <div class="row" class="margin:3px 3px 3px 3px;">
                <div class="col text-start">
                    <div class="col-md-7">
                        <li>
                            <h1>{{ $item->title }}</h1>
                        </li>
                        {{-- <li><h4>{{ substr($item->deskripsi, 0, 20) }}</h4></li> --}}
                        <p><?php echo substr($item->deskripsi, 0, 50); ?></p>
                        <?php if (strlen($item->deskripsi) > 50): ?>
                        <p class="more"><?php echo substr($item->deskripsi, 51); ?></p>
                        <a class="readmore" href="javascript:void(0);">read more</a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col text-end">
                    <br>
                    @include('read.show-posting')
                    <a class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#postingModal">Show</a>
                    <br>
                    <br>
                    @if ($cek && ($cek->role == 'Admin' || $cek->role == 'owner'))
                        <form action="/posting/{{ $item->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger " type="submit"
                                onclick="return confirm ('Apakah anda yakin untuk menghapus posting ini?')">Delete</button>
                        </form>
                        <br>
                        {{-- <a class=" btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#editKarya_{{$item->id}}">Edit</a> --}}
                        {{-- <a class="btn btn-secondary btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#posting_{{$item->id}}">Edit</a> --}}
                        @include('forms.editPosting')

                        <a class="btn btn-secondary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#posting_{{ $item->id }}">Edit</a>
                    @endif
                    <br>
                    <br>
                </div>
            </div>
        </div>
    @endforeach
    <style>
        li {
            list-style-type: none;
        }

        .more {
            display: none;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        var $readmore = $('.readmore');
        $readmore.bind('click', function() {
            var $prev = $(this).prev('.more');
            if ($prev.is(':visible')) {
                $prev.hide();
                $(this).text('read more');
            } else {
                $prev.show();
                $(this).text('minimize');
            }
        });
    </script>
@endsection
