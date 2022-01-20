@extends('layouts.app')

@section('content')

    <div class="heading d-flex d-flex flex-column align-items-center ">
        <h1 class="text-center">Posts table</h1>
        <a name="" id="" class="btn btn-primary" href="{{ route('admin.posts.create')}}" role="button">Create</a>
    </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                    <th>Actions</th>
    
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td scope="row">{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->created_at}}</td>
                        <td>{{$post->updated_at}}</td>
                        <td><a href="{{route('admin.posts.show', $post->id)}}">View</a>  - Edit - Delete</td>
                    </tr>    
                @endforeach
            </tbody>
        </table>

        {{$posts->links()}}

    </div>
    
@endsection