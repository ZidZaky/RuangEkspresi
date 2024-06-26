<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <style>
        body {
            font-family: 'Inter';

            .navbar {
                background-color: var(--white);
                border-bottom: var(--line);

                .container-fluid {
                    padding: 8px 50px;

                    .d-flex {
                        gap: 160px;

                        form {
                            input {
                                background-color: var(--bg);
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
    <nav class="navbar navbar-expand-lg border border-opacity-25 ">
        <div class="container-fluid justify-between">
            <div class="d-flex align-items-center">
                <a class="navbar-brand" href="/dashboard">
                    <img src="/assets/images/logo.png" alt="" class="logo" style="height:36px">
                </a>

                <form action="/search" method="GET" class="">
                    <input type="text" name="keyword" id="keyword" class="form-control" placeholder="Search">
                    <!-- <button type="submit" class="btn btn-primary">Search</button> -->
                </form>
            </div>

            <!-- ketika user udah login -->
            @if (session('account'))
            <div class="profile dropdown d-flex">
                <button class="btn p-0 d-flex gap-2 align-items-center" type="button" data-bs-toggle="dropdown" aria-expanded="false"">
                    @if (session('account')['profile'] == null)
                    <img src=" /assets/images/profile.png" alt="" style="width:36px" class="rounded-circle">
                    @else
                    <img src="/storage/{{session('account')['profile']}}" alt="" style="width:36px" class="rounded-circle">
                    @endif
                    Hallo, {{ session('account')['username'] }}
                    <i class="fi fi-rr-angle-small-down d-flex fs-5"></i>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/account/{{session('account')['id']}}/detailProfile">My Account</a></li>
                    <li><a class="dropdown-item" href="/logout">Sign Out</a></li>
                    @if (session('account')['role'] == 'Admin')
                    <li><a class="dropdown-item" href="/account">Manage User</a></li>
                    <li><a class="dropdown-item" href="/event">Manage Event</a></li>
                    <li><a class="dropdown-item" href="/komunitas/admin">Manage Komunitas</a></li>
                    <li><a class="dropdown-item" href="/posting">Manage Posting</a></li>
                    @endif
                </ul>
            </div>
            @else

            <!-- ketika user belum login -->
            <div class="button-group d-flex gap-2">
                <a class="login btn" href="/login">Sign In</a>
                <a class="register btn text-light" href="/register">Sign Up</a>
            </div>
            @endif
        </div>
    </nav>


    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
