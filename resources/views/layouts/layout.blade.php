<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>@yield('title')</title>
<<<<<<< HEAD
    <style>
        body {
            margin: 0;
            padding: 0;

            .main {
                padding: 24px 50px;
                gap: 24px;
                height: 100vh;
                background-color: #f2f2f2;

                .sidebar {
                    width: 250px;
                    height: fit-content;
                }

                .content {
                    flex: 1;
                    height: fit-content;
                }

                .aside {
                    width: 300px;
                    height: 300px;
                }

            }
        }
    </style>
=======
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

>>>>>>> 29453c39d1f09bbf668206a02609a312af3ccbe5
</head>

<body>
<<<<<<< HEAD
    @include('components.navbar')
<<<<<<< HEAD
    @include('components.popup')
    <div class="main container-fluid d-flex justify-content-between">
        <div class="sidebar">
            @yield('sidebar')
        </div>
        <div class="content">
            @yield('content')
        </div>
        <div class="aside bg-warning">
            @yield('aside')
            <p>Comming Soon</p>
        </div>
    </div>
    <div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
=======
=======
>>>>>>> 810cdf187d4fa89a1a19330b36c0e5eeadc45c76

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz4fnFO9gybVu29BzypKLsI6sLw5Ppp0K9h2raI7pkFsr27SElmR0Idl5I" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-pzjw8f+ua7Kw1TIqMWBXxIpKfn2AOQZZs25KPSjGRw5HEzF6NLGh2P6WnKEKTn2w" crossorigin="anonymous">
    </script>


>>>>>>> 29453c39d1f09bbf668206a02609a312af3ccbe5
</body>

</html>