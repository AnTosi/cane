@extends('layouts.admin')

@section('content')
    <div class="container m-3">
        <h1>Add a new Game</h1>
        
        <form action="{{route('admin.games.store')}}" method="post">
            @csrf

            {{-- add title --}}
            <div class="mb-3">
                <label for="title" class="form-label">Add a new Game</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Type the game title here" aria-describedby="titleHelper" value="{{old('title')}}">
                <small id="helpId" class="text-muted">Maximum 200 characters</small>

                @error('title')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>   
                @enderror

            </div>
            {{-- //add title --}}

            {{-- add description --}}
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control @error('description')is-invalid @enderror" name="description" id="description" rows="3">{{old('description')}}</textarea>
                <small id="descriptionHelper" class="form-text text-muted">Game description</small>
                @error('description')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>                   
                @enderror                
            </div>
            {{-- //add description --}}


            {{-- add img-url --}}
            <div class="mb-3">
                <label for="cover" class="form-label">Cover Url</label>
                <input type="text" class="form-control @error('cover') url is invalid @enderror" name="cover" id="cover" aria-describedby="coverHelper" placeholder="Insert here the link to the image">
                <small id="coverHelper" class="form-text text-muted">Link to the cover img</small>
                @error('cover')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>                   
                @enderror                
            </div>
            {{-- //add img-url --}}

            {{-- is available --}}

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="yes" id="is_available">
                <label class="form-check-label" for="is_available">
                    Is available
                </label>
            </div>
            {{-- //is available --}}
            
            <button type="submit" class="btn btn-success my-3">Submit</button>

        </form>

    </div>
@endsection
