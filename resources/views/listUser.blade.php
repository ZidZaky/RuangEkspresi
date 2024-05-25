@extends('layouts.layout')

@section('title', 'List User')

@section('content')
<?php
// contoh data
$users = [
    [
        'name' => 'Kevin Aluminium',
        'profession' => 'Pelukis',
        'description' => 'Melukis bukan sekadar aktivitas, melainkan sebuah kebutuhan, sebuah cara untuk terhubung dengan diri sendiri dan dunia di sekitar. Setiap goresan membawa kedamaian, mengantarkan saya ke dunia imajasi di mana segala sesuatu mungkin terjadi.',
        'image' => 'path_to_kevin_image.jpg'
    ],
    [
        'name' => 'Deo Silver',
        'profession' => 'Desainer',
        'description' => 'Di siang hari, saya menjelajahi dunia digital, mengimplementasikan kode dan piksel menjadi situs web yang memukau. Namun, di luar jam kerja, saya menjelajahi dunia lain, dunia penuh warna dan ekspresi.',
        'image' => 'path_to_deo_image.jpg'
    ],
];
?>
<?php
$opsi = array("Aktif", "Non aktif");
?>

<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
        }

        .card-text {
            font-size: 0.875rem;
            padding-top: 10px;
        }

        .card-header {
            background: linear-gradient(#007bff, #0056b3);
            color: white;
            text-align: center;
            font-size: 1.5rem;
            padding: 1rem 0;
            margin: 1rem auto;
            width: 50%;
            border-radius: 20px;
        }

        .card {
            border: none;
        }

        .card-body {
            padding: 1rem;
        }

        .profile-pic {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .user-info {
            background: linear-gradient(#7996FF, #435699);
            display: flex;
            align-items: center;
            border-radius: 5px;
            margin: -10px;
            padding: 10px;
        }

        .user-info .username {
            font-size: 1rem;
            font-weight: bold;
        }

        .card-container {
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card-header">List User</div>
        <div id="user-cards" class="row">
            @foreach ($users as $user)
                <div class="col-md-4 card-container">
                    <div class="card">
                        <div class="card-body">
                            <div class="user-info">
                                <img src="{{ $user['image'] }}" alt="{{ $user['name'] }}" class="profile-pic">
                                <div class="username">{{ $user['name'] }}<br><small>{{ $user['profession'] }}</small></div>
                                <select name="pilihan" id="pilihan">
                                <?php foreach($opsi as $status): ?>
                                    <option value="<?php echo strtolower($status); ?>"><?php echo $status; ?></option>
                                <?php endforeach; ?>
                                </select>
                            </div>
                            <p class="card-text mt-2">{{ $user['description'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
@endsection
