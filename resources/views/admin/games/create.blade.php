@extends('layouts.admin')

@section('content')
    <div class="container m-3">
        <h1>Add a new Game</h1>
        
        {{-- <form action="{{route('admin.games.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Add a new Game</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Type the game title here" aria-describedby="titleHelper" value="{{old('title')}}">
                <small id="helpId" class="text-muted">Maximum 200 characters</small> --}}

                {{-- @error('title')
                    <div class="alert alert" role="alert">
                        {{$message}}
                    </div>
                    
                @enderror --}}

            {{-- </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control @error('description')is-invalid @enderror" name="description" id="description" rows="3">{{old('description')}}</textarea>
                @error('description')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>                   
                @enderror                
            </div>

            <button type="submit" class="btn btn-success">Submit</button>

        </form> --}}

    </div>
@endsection