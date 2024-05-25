@section('title')
Register
@endsection

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <!-- style -->
    <style>
        body {
            height: 100vh;
            display: grid;
            place-items: center;
            font-family: var(--font-family);

            .bg {
                position: absolute;
                z-index: 0;
                filter: blur(200px);
            }

            #blue {
                top: 10%;
                left: 20%;
            }

            #red {
                top: 30%;
                right: 20%;
            }

            form {
                z-index: 1;
                width: 450px;
                padding: 50px;
                height: fit-content;
                outline: var(--line);
                border-radius: var(--br-lg);
                background-color: var(--white);

                .form-control {
                    width: 350px;
                    font: var(--body);
                    border: var(--line);
                    padding: var(--p-md);
                }

                .btn {
                    width: 100%;
                    font: var(--button);
                    color: var(--white);
                    padding: var(--p-md);
                    background-color: var(--accent);

                    &:hover {
                        color: var(--white);
                        background-color: var(--accent);
                    }
                }

            }
        }
    </style>

</head>

<body>
    <form action="" method="post" class="d-flex flex-column justify-content-center align-items-center needs-validation" novalidate>
        @csrf
        <h1 class="text-center">Sign Up</h1>
        <div class="field-set mt-4">
            <div class="field">
                <input type="text" name="" id="" class="form-control" placeholder="Username" required>
                <div class="invalid-feedback">
                    Please enter your username!
                </div>
            </div>
            <div class="field">
                <input type="email" name="" id="" class="form-control mt-3" placeholder="Email" required>
                <div class="invalid-feedback">
                    Please enter your email!
                </div>
            </div>
            <div class="field">
                <input type="password" name="" id="" class="form-control mt-3" placeholder="Password" required>
                <div class="invalid-feedback">
                    Please enter your password!
                </div>
            </div>
        </div>
        <button class="btn btn-primary mt-3" type="submit">Sign Up</button>
        <p class="text-secondary mt-5 text-center">Have an account? <a href="{{ route('showLogin') }}" class="text-decoration-none">Sign In Here!</a></p>

    </form>


    <img src="/assets/images/circleBlue.png" alt="" id="blue" class="bg">
    <img src="/assets/images/circleRed.png" alt="" id="red" class="bg">



    <!-- js -->
    <script>
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>