@extends('layouts.app')

@section('content')
<div class="p-5 bg-light">
    <div class="container">
        <h1 class="display-3">Blog</h1>
        <p class="lead">Welcome to the official DC blog</p>
    </div>
</div>

<!-- /jumbotron -->

<section class="posts container">
    <div class="row">
        @forelse ($posts as $post)
            <div class="col-4">
                <div class="card my-3">
                    <div class="card-img">
                        <img src="{{$post->poster}}" alt="">
                    </div>
                    <div class="card-body px-3">
                        <h3 class="my-2">{{$post->title}}</h3>
                        <p>{{$post->description}}</p>
                        <a href="{{route('single-post', $post->id)}}">Continue reading...</a>
                    </div>
                </div>
            </div>
        @empty
            Nothing to see here, move on
        @endforelse
    </div>

    {{$posts->links()}}
</section>
<!-- /posts -->
@endsection