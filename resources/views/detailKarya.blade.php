<!-- @extends('layouts.layout')

@section('title', 'Detail Karya')

@section('content')
    <h1>Detail Karya</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Judul Karya: {{ $karya->judulKarya }}</h5>
            <p class="card-text">Tema: {{ $karya->tema }}</p>
            <p class="card-text">Deskripsi: {{ $karya->deskripsi }}</p>
        </div>
    </div>
@endsection -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painting Post</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #8ba4ff;
            padding: 10px 20px;
            color: white;
        }
        .post {
            background-color: white;
            margin: 20px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .user-info {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .user-info img {
            border-radius: 50%;
            margin-right: 10px;
        }
        .post-title {
            font-size: 24px;
            margin: 10px 0;
        }
        .post-description {
            font-size: 16px;
            margin: 10px 0;
        }
        .post-image {
            width: 100%;
            border-radius: 10px;
        }
        .comments {
            margin-top: 20px;
        }
        .comment {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 0;
            border-top: 1px solid #e0e0e0;
        }
        .comment:first-child {
            border-top: none;
        }
        .comment img {
            border-radius: 50%;
            margin-right: 10px;
        }
        .delete-button {
            color: red;
            cursor: pointer;
        }
        .hapus{
            background-color: red;
            color: white;
            cursor: pointer;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .keluar{
            background-color: blue;
            color: white;
            cursor: pointer;
            padding: 5px 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="header">
        <div><a href="/" class="keluar"> Keluar</a></div>
        <div>Postingan</div>
        <div><a href="/" class="hapus"> Hapus</a></div>
    </div>

    <div class="post">
        <div class="user-info">
            <img src="user-avatar.png" alt="User Avatar" width="50">
            <div>
                <div><strong>Kevin Aluminium</strong></div>
                <div>24 Mei 2024</div>
            </div>
        </div>
        <div class="post-title">Lukisan Seorang wanita</div>
        <div class="post-description">
            <strong>Elegan</strong><br>
            Wanita elegan memancarkan pesona yang tak terlupakan. Di balik penampilannya yang menawan, terpancar aura ketenangan, kecerdasan, dan rasa percaya diri yang tinggi. Ia melangkah dengan anggun, setiap gerakannya penuh makna dan terukur.
        </div>
        <img src="painting.jpg" alt="Painting" class="post-image">

        <div class="comments">
            <div class="comment">
                <div class="user-info">
                    <img src="user-avatar.png" alt="User Avatar" width="30">
                    <div>Kevin Aluminium: Wah gambar ini memiliki beragam karakter dengan bentuk, sifat, dan simbolismenya masing-masing.</div>
                </div>
                <div class="delete-button">Delete</div>
            </div>
            <div class="comment">
                <div class="user-info">
                    <img src="user-avatar.png" alt="User Avatar" width="30">
                    <div>Zidan Platinum: I love This</div>
                </div>
                <div class="delete-button">Delete</div>
            </div>
        </div>
    </div>
</body>
</html>
