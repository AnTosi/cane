@extends('layouts.app')

@section('content')
    <div class="container">
        <span>Post ID: {{$post->id}}</span>
        <h3>Title: {{$post->title}}</h3>
        <p>Text: {{$post->text}}</p>
        <span>Created at: {{$post->created_at}}</span>, <span>Updated at: {{$post->updated_at}}</span>
    </div>
@endsection