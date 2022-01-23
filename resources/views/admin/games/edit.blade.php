@extends('layouts.admin')

@section('content')
    <div class="container m-3">
        <h1>Edit a Game</h1>
        
        <form action="{{route('admin.games.update', $game->id)}}" method="post">
            @csrf
            @method('PUT')

            {{-- edit title --}}
            <div class="mb-3">
                <label for="title" class="form-label">Edit Game title</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Type the game title here" aria-describedby="titleHelper" value="{{$game->title}}">
                <small id="helpId" class="text-muted">Maximum 200 characters</small>

                @error('title')
                    <div class="alert alert" role="alert">
                        {{$message}}
                    </div>
                    
                @enderror

            </div>
            {{-- //edit title --}}

            {{-- edit description --}}
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control @error('description')is-invalid @enderror" name="description" id="description" rows="3">{{$game->description}}</textarea>
                <small id="cover helper" class="form-text text-muted">Game description</small>
                @error('description')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>                   
                @enderror                
            </div>
            {{-- //edit description --}}


            {{-- edit img-url --}}
            <div class="mb-3">
              <label for="cover" class="form-label">Cover Url</label>
              <input type="text" class="form-control @error('cover') url is invalid @enderror" name="cover" id="cover" aria-describedby="coverHelper" placeholder="Insert here the link to the image" value="{{$game->cover}}">
              <small id="coverHelper" class="form-text text-muted">Link to the cover img</small>
            </div>
            {{-- //edit img-url --}}

            {{-- is available --}}

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="{{$game->is_available}}" id="is_available">
                <label class="form-check-label" for="is_available">
                    Is available
                </label>
            </div>
            {{-- //is available --}}
            
            <button type="submit" class="btn btn-success my-3">Save changes</button>

        </form>

    </div>
@endsection