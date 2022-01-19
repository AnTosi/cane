@extends('layouts.app')

@section('content')
    <div class="container my-3">
        <h1>Create New Post</h1>
        <form action="{{route('admin.posts.store')}}" method="post">
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" name="title" id="title" class="form-control" placeholder="Type your title here" aria-describedby="titleHelper" required>
              <small id="titleHelper" class="text-muted">Type a title for your post, max: 255 characters</small>
            </div>
            <div class="mb-3">
              <label for="text" class="form-label">Text</label>
              <textarea class="form-control" name="text" id="text" rows="5" required></textarea>
            </div>

            <button type="submit" class="btn btn-success">Save post</button>
        </form>
    </div>
@endsection