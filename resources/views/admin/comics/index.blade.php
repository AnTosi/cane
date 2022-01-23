@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>All Comics for Admin</h1>
        <a name="create" id="create" class="btn btn-primary" href="{{route('admin.comics.create')}}" role="button">Add a Comic</a>
        
        <div class="container">
            @if (session('feedback'))
                <div class="alert alert-success my-3 ">
                    {{ session('feedback') }}
                </div>
            @endif
        </div>
        
        
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Cover</th>
                    <th>Title</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                    <th>Actions</th>
    
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                <tr>
                    <td scope="row">{{$comic->id}}</td>
                    <td class="d-flex justify-content-center"><img height="80px" src="{{$comic->cover}}" alt=""></td>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->created_at}}</td>
                    <td>{{$comic->updated_at}}</td>
                    <td>
                        <a class="btn btn-primary" title="view" href="{{route('admin.comics.show', $comic->id)}}"><i class="fas fa-eye"></i></a> 
                        <a class="btn btn-info" title="edit" href="{{route('admin.comics.edit', $comic->id)}}"><i class="fas fa-edit"></i></a> 
                        <button title="delete" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$comic->id}}">
                            <i class="fas fa-trash"></i>
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="delete{{$comic->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-{{$comic->id}}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Delete Comic {{$comic->title}}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Attention, deleted comics cannot be recovered.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <form action="{{route('admin.comics.destroy', $comic->id)}}" method="post">
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
        {{$comics->links()}}
    </div>
@endsection