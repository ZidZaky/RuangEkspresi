<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <style>
        body {
            .navbar {
                background-color: var(--white);

                .container-fluid {
                    padding: 8px 50px;

                    .d-flex {
                        gap: 160px;
                        .navbar-brand {

                            img {
                                height: 36px;
                            }
                        }

                        form{
                            input{
                                background-color: #f2f2f2;
                                width: 300px;
                            }
                        }
                    }


                    .button-group {

                        .login {
                            border: 1px solid var(--accent);
                            color: var(--accent);
                        }

                        .register {
                            background-color: var(--accent);
                        }
                    }
                }
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid justify-between">
            <div class="d-flex align-items-center">
                <a class="navbar-brand" href="/">
                    <img src="/assets/images/logo.png" alt="">
                </a>

                <form action="">
                    <input type="text" name="" id="" class="form-control" placeholder="Search" >
                </form>
            </div>

            <!-- ketika user udah login -->
            @auth
            <div class="profile dropdown">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="/assets/images/profile.png" alt="">
                    Cahyo Gurih
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">My Account</a></li>
                    <li><a class="dropdown-item" href="#">Sign Out</a></li>
                </ul>
            </div>
            @endauth

            <!-- ketika user belum login -->
            @guest
            <div class="button-group d-flex gap-2">
                <a class="login btn" href="/login">Sign In</a>
                <a class="register btn text-light" href="/register">Sign Up</a>
            </div>
            @endguest
        </div>
    </nav>


    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
