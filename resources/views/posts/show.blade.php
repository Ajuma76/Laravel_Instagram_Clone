@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100" alt="">
        </div>
        <div class="col-4">
            <div class="d-flex align-items-center">
                <div class="d-flex">
                    <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-25" alt="">
                </div>
                <div>
                    <a href="/profile/{{ $post->user->id }}">
                        <div class="fw-bold text-dark">{{$post->user->username}}</div></a>
                </div>
                <a href="">Follow</a>
            </div>

            <hr>
            <p><a href="/profile/{{ $post->user->id }}">
                    <span class="fw-bold text-dark">{{$post->user->username}}</span>.
                </a> {{$post->caption}}</p>
        </div>
    </div>
</div>
@endsection


