@extends('layouts.layout')

@section('title', 'Detail Profile')

@section('content')
@include('forms.editAccount')
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #ffffff;
}

.post {
    background-color: white;
    /* margin: 10px; */
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 910px;
    margin-left: -270px;
    /* margin-right: 400px; */
}

.user-info {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
    background-color: green;
}

.postdesk {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 430px;
}

.desk h3 {
    font-weight: bold;
    font-size: 17px;
}

.desk p {
    font-size: 14px;
}
</style>

<div class="post">
    <div class="user-info">
        @if (session('account')['profile'] == null)
        <img src="/assets/images/profile.png" alt="" style="max-width:50px">
        @else
        <img src="/storage/{{ session('account')['profile'] }}" alt="" style="max-width:50px">
        @endif
        <div>
            <div><strong>{{ $pengguna->username }}</strong></div>
            <div>Account Created At : {{ $pengguna->created_at }}</div>
        </div>
    </div>
    {{-- <div class="post-title">{{$pengguna->email}}
</div> --}}

</div>

</div>

<div class="postdesk">
    <table class="user-info-table">
        <div class="desk">
            <h3>About</h3>
            <hr>
            <p>Lorem ipsum dolor sit amet consectetur. Accumsan et morbi dui egestas consequat in. </p>
            <p>Diam enim in tortor enim vel feugiat feugiat. Accumsan duis viverra cursus eu nibh in ultrices malesuada.
            </p>
        </div>
    </table>
</div>
@endsection