@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>All Games x Admin</h1>
        <a name="create" id="create" class="btn btn-primary" href="{{route('admin.games.create')}}" role="button">Add a Game</a>
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
                    <td>View - Edit - Delete</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$games->links()}}
    </div>
@endsection