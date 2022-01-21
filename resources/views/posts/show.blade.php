@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="img_container text-center py-3">
            <img class="text-center" src="{{$post->poster}}" alt="">
        </div>
        <h3 class="px-3 my-2">{{$post->title}}</h3>
        <div class="post_text">
            <p class="px-3">{{$post->text}}</p>
        </div>
    </div>
@endsection