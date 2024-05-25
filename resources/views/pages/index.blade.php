@extends('layouts.layout')

@section('sidebar')
@include('components.sidebar')
@endsection

@section('content')
<style>
    .post {
        padding: 16px;
        background-color: #fff;
        border-radius: 16px;
        width: auto;

        .input {
            background-color: antiquewhite;

            button {
                background-color: #f2f2f2;
                width: auto;
            }
        }

        .list-menu{

            button{
                i{
                    display: flex;
                }
            }

        }

    }
</style>
<div class="post">
    <div class="input d-flex gap-3 align-item-center">
        <img src="/assets/images/profile.png" alt="">
        <button type="button" class="btn text-secondary" data-bs-toggle="modal" data-bs-target="#event">What do you think today?</button>
    </div>
    <hr>
    <div class="list-menu d-flex gap-4">
        <button type="button" class="btn text-secondary d-flex gap-2 align-items-center p-0" data-bs-toggle="modal" data-bs-target="#event"><i class="fi fi-rr-picture d-flex "></i>Image</button>
        <button type="button" class="btn text-secondary d-flex gap-2 align-items-center p-0" data-bs-toggle="modal" data-bs-target="#event"><i class="fi fi-rr-video-camera-alt d-flex"></i>Video</button>
        <button type="button" class="btn text-secondary d-flex gap-2 align-items-center p-0" data-bs-toggle="modal" data-bs-target="#event"><i class="fi fi-rr-link"></i>Link</button>
    </div>

</div>


@endsection