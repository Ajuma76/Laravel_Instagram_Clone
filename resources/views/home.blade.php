@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-8 pt-3">
            <img src="data:image/png;base64,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" class="rounded-circle" alt="">
        </div>
        <div class="col-9 pt-5 px-6">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class=""><strong>153 </strong>posts</div>
                <div class="px-4"><strong>23k </strong>followers</div>
                <div class="px-4"><strong>212 </strong>following</div>
            </div>
            <div class="pt-4"><strong>{{ $user->profile->title ?? 'N/A' }}</strong></div>
            <div>{{ $user->profile->description ?? 'N/A' }}</div>
            <div><a href="#"><strong>{{ $user->profile->url ?? 'N/A' }}</strong></a></div>
        </div>

        <div class="row pt-5">
            <div class="col-4">
                <img src="https://assets.entrepreneur.com/content/3x2/2000/20160628101609-Coding.jpeg" class="w-100" alt="">
            </div>
            <div class="col-4">
                <img src="https://images.theconversation.com/files/304447/original/file-20191129-95226-21ys3b.jpg?ixlib=rb-1.1.0&q=45&auto=format&w=926&fit=clip" class="w-100" alt="">
            </div>
            <div class="col-4">
                <img src="https://gds.blog.gov.uk/wp-content/uploads/sites/60/2017/09/coding-in-the-open-e1504519593768.jpg" class="w-100" alt="">
            </div>
        </div>
    </div>
</div>
@endsection
