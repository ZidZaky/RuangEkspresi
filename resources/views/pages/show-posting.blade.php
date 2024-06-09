<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    @php
        if (session('account') == null) {
            header('Location: login');
            exit();
        }
    @endphp
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Posting</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .post {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 600px;
            width: 100%;
        }

        .post-header {
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }

        .post-header h4 {
            font-weight: bold;
        }

        .post-header small {
            color: #6c757d;
        }

        .post-body {
            padding-top: 10px;
        }

        .post-body p {
            font-size: 1rem;
            color: #333;
        }

        .post-body h5 {
            margin-top: 15px;
            font-size: 1.2rem;
            color: #495057;
        }

        .post-body p strong {
            font-size: 1.1rem;
            color: #000;
        }
    </style>
</head>

<body>

    <!-- Post -->
    <div class="post border rounded-0 p-3">
        <div class="post-header d-flex align-items-center mb-3">
@if($posting)
            <div class="ms-2">
                <h4 class="mb-0">Posting</h4>
            </div>
        </div>
@foreach($posting as $p)
        <div class="post-body mb-3">
            <h4>{{ $p->title }}</h4>
            <h5 class="mb-0">Deskripsi: </h5>
            <p>{{ $p->deskripsi}}</p>
        </div>
@endforeach
    </div>
@else
<div class="ms-2">
                <h4 class="mb-0">Postingan Kosong</h4>
            </div>

@endif

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>