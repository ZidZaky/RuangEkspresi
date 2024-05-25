@extends('layouts.layout2')

@section('title')
    Register
@endsection

@section('content')
<style>
    html, body {
        height: 100%;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        background-image: url("/assets/images/background.png");
        background-size: cover; /* Ensure the background image covers the entire viewport */
        background-position: center; /* Center the background image */
    }

    .card {
        text-align: center;
        position: absolute;

    }

    .login-container {
        width: 400px;
        padding: 20px;
        background-color: #f9f9f9;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        border-radius: 20px;
    }

    .form-group {
        margin-bottom: 20px;
        padding: 0 20px 0 20px;
    }

    input[type="text"],
    input[type="password"],
    input[type="email"] {
        width: 100%;
        padding: 10px;
        border-radius: 3px;
        border: 1px solid #ccc;
    }

    button[type="submit"] {
        display: block;
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 3px;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
        margin  -bottom: 20px;
    }

    button[type="submit"]:hover {
        background-color: #0056b3;
    }

</style>

<div class="card" style="position: absolute">
    <div class="login-container">
        <h1>Login</h1>
        <form method="POST" action="/login" class="login-form">
            @csrf
            <div class="form-group">
                <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <br>
        <p>Belum punya akun? <a href="/register">Buat Akun Disini!</a></p>
    </div>
</div>

@endsection


