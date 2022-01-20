@extends('layouts.app')

@section('content')
    <div class="container my-3">
        <h1>Edit Post</h1>
    
        <form action="{{route('admin.posts.update', $post->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Type your title here" aria-describedby="titleHelper" value="{{$post->title}}">
                <small id="titleHelper" class="text-muted">Type a title for your post, max: 255 characters</small>

                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Text</label>
                <textarea class="form-control @error('text') is-invalid @enderror" name="text" id="text" rows="5">{{$post->text}}</textarea>
                @error('text')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">Save post</button>
        </form>
    </div>
@endsection