@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>All Games x Admin</h1>
        <a name="create" id="create" class="btn btn-primary" href="{{route('admin.games.create')}}" role="button">Add a Game</a>
        
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
                @foreach ($games as $game)
                <tr>
                    <td scope="row">{{$game->id}}</td>
                    <td class="d-flex justify-content-center"><img height="80px" src="{{$game->cover}}" alt=""></td>
                    <td>{{$game->title}}</td>
                    <td>{{$game->created_at}}</td>
                    <td>{{$game->updated_at}}</td>
                    <td>
                        <a class="btn btn-primary" title="view" href="{{route('admin.games.show', $game->id)}}"><i class="fas fa-eye"></i></a> 
                        <a class="btn btn-info" title="edit" href="{{route('admin.games.edit', $game->id)}}"><i class="fas fa-edit"></i></a> 
                        <button title="delete" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$game->id}}">
                            <i class="fas fa-trash"></i>
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="delete{{$game->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-{{$game->id}}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Delete Game {{$game->title}}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Attention, deleted game cannot be recovered.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <form action="{{route('admin.games.destroy', $game->id)}}" method="post">
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
        {{$games->links()}}
    </div>
@endsection