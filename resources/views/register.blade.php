@extends('layouts.layout')

@section('title')
    Register
@endsection


@section('content')
    <h1>Register</h1>
    <form method="POST" action="/account">
        @csrf
        <label for="username">username</label>
        <input type="text" name="username" id="username">
        <br>
        <label for="password">password</label>
        <input type="text" name="password" id="password">
        <button type="submit">Submit</button>

    </form>
@endsection
