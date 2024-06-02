<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Komunitas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Daftar Komunitas</h1>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Komunitas</th>
                    <th scope="col">Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($komunitas as $k)
                <tr>
                    <th scope="row">{{ $k->id }}</th>
                    <td>{{ $k->nama_komunitas }}</td>
                    <td>{{ $k->deskripsi }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
