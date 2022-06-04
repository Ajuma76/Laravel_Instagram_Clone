@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-8 pt-3">
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-75" alt="">
        </div>

        <div class="col-9 pt-5 px-6">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center py-3">
                    <div class="h4">{{ $user->username }}</div>

                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                </div>

                @can('update', $user->profile)
                    <a href="/p/create">Add New Post</a>
                @endcan
            </div>


            @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            @endcan

            <div class="d-flex">

                <div class=""><strong>{{$postCount}}</strong> posts</div>
                <div class="px-4"><strong>{{ $followersCount }}</strong> followers</div>
                <div class="px-4"><strong> {{ $followingCount }}</strong> following</div>

            </div>

                <div class="pt-4"><strong>{{ $user->profile->title ?? 'N/A' }}</strong></div>
                <div>{{ $user->profile->description ?? 'N/A' }}</div>
                <div><a href="#"><strong>{{ $user->profile->url ?? 'N/A' }}</strong></a></div>
        </div>

        <div class="row pt-5">
            @foreach($user->posts as $post)
                <div class="col-4 pb-4">
                    <a href="/p/{{ $post->id }}">
                        <img src="/storage/{{$post->image}}" class="w-100" alt="">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
