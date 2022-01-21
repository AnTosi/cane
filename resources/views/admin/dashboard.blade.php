@extends('layouts.admin')

@section('content')

    <h1>Welcome to the dashboard</h1>

<div class="d-flex flex-column flex-shrink-0 p-3 text_main-blue" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text_main-blue text-decoration-none">
        <span class="fs-4">Dashboard</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item bg_main-blue">
            <a href="{{route('admin.posts.index')}}" class="nav-link text-white" aria-current="page">Posts</a>
        </li>
        <li class="bg_main-blue">
            <a href="#" class="nav-link text-white">Movies</a>
        </li>
        <li class="bg_main-blue">
            <a href="#" class="nav-link text-white">Comics</a>
        </li>
        <li class="bg_main-blue">
            <a href="#" class="nav-link text-white">Videos</a>
        </li>
    </ul>
</div>
@endsection