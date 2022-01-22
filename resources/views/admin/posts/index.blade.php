@extends('layouts.admin')

@section('content')

    <div class="heading d-flex d-flex flex-column align-items-center ">
        <h1 class="text-center mt-3">Posts table</h1>
        <a name="" id="" class="btn btn-primary align-self-end" href="{{ route('admin.posts.create')}}" role="button">Create</a>
    </div>
    
    <div class="container">
        @if (session('feedback'))
        <div class="alert alert-success my-3 ">
            {{ session('feedback') }}
        </div>
        @endif
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
                        <td>
                            <a class="btn btn-primary" title="view" href="{{route('admin.posts.show', $post->id)}}"><i class="fas fa-eye"></i></i></a>

                            <a class="btn btn-info" title="edit" href="{{route('admin.posts.edit', $post->id)}}"><i class="fas fa-edit"></i></a>
                            <!-- Button trigger modal -->
                        <button title="delete" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$post->id}}">
                            <i class="fas fa-trash"></i>
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="delete{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-{{$post->id}}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Delete Post {{$post->title}}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Attention, deleted post cannot be recovered.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <form action="{{route('admin.posts.destroy', $post->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                            
                        </td>
                    </tr>    
                @endforeach
            </tbody>
        </table>

        {{$posts->links()}}

    </div>
    
@endsection