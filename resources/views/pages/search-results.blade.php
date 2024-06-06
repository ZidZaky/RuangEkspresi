

@section('content')
<div class="container">
    <h1>Search Results for "{{ $keyword }}"</h1>

    <h2>Penggunas</h2>
    @if ($penggunas->isEmpty())
        <p>No pengguna found.</p>
    @else
        <ul>
            @foreach ($penggunas as $pengguna)
                <li>{{ $pengguna->username }} - {{ $pengguna->email }}</li>
            @endforeach
        </ul>
    @endif

    <h2>Events</h2>
    @if ($events->isEmpty())
        <p>No events found.</p>
    @else
        <ul>
            @foreach ($events as $event)
                <li>{{ $event->nama_event }} - {{ $event->deskripsi_event }}</li>
            @endforeach
        </ul>
    @endif

    <h2>Komunitas</h2>
    @if ($komunitas->isEmpty())
        <p>No komunitas found.</p>
    @else
        <ul>
            @foreach ($komunitas as $komun)
                <li>{{ $komun->nama_komunitas }} - {{ $komun->deskripsi }}</li>
            @endforeach
        </ul>
    @endif
</div>

