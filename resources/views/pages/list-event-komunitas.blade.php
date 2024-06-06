@extends('layouts.layout')

@section('title')
    Admin Manage Event
@endsection

@section('content')
    @include('forms.create-event')
    <h1>Event Lists By Komunitas {{ $komunitas->nama_komunitas }}</h1>
    <a href="/komunitas/detail/{{ $komunitas->id_komunitas }}" class="btn btn-danger">Back</a>


    @php
        $cek = App\Models\Anggota::where('id_pengguna', session('account')['id'])->first();
        // dd($cek);
    @endphp
    @if ($cek && ($cek->role == 'Admin' || $cek->role == 'owner'))
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Add New Event
        </button>
        <div></div>
    @endif

            {{-- Cuma coba ngeluarin data  --}}
            @foreach ($eventList as $item)
            <div class="container" style="border:4px solid black;border-radius:10px;margin-top:5px;">
                <div class="row" class="margin:3px 3px 3px 3px;">
                  <div class="col text-start">
                      <div class="col-md-7">
                        <li><h1>{{ $item->nama_event }}</h1></li>
                            {{-- <li><h4>{{ substr($item->deskripsi_event, 0, 20) }}</h4></li> --}}
                            <p><?php echo substr($item->deskripsi_event, 0, 50); ?></p>
                            <?php if (strlen($item->deskripsi_event) > 50): ?>
                                <p class="more"><?php echo substr($item->deskripsi_event, 51); ?></p>
                                <a class="readmore" href="javascript:void(0);">read more</a>
                            <?php endif; ?>
                      </div>
                      <li>Mulai: {{ $item->tanggal_mulai }} <br> Selesai: {{ $item->tanggal_selesai }}</li>
                  </div>
                  <div class="col text-end">
                    <br>
                            <a class=" btn btn-secondary btn-sm" href="/event/{{ $item->id_event }}">Show</a>
                            <br>
                            <br>
                                @if ($cek && ($cek->role == 'Admin' || $cek->role == 'owner'))
                                    <form action="/event/{{ $item->id_event }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger " type="submit"
                                            onclick="return confirm ('Apakah anda yakin untuk menghapus event ini?')">Delete</button>
                                    </form>
                            <br>
                                <a class=" btn btn-secondary btn-sm" href="/event/{{ $item->id_event }}">Edit</a>
                            @endif
                            <br>
                            <br>
                  </div>
                </div>
            </div>
            @endforeach
<style>
    li{
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
