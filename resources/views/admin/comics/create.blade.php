@extends('layouts.admin')

@section('content')
    <div class="container m-3">
        <h1>Add a new Comic</h1>
        
        <form action="{{route('admin.comics.store')}}" method="post">
            @csrf

            {{-- add title --}}
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Type the comic title here" aria-describedby="titleHelper" value="{{old('title')}}">
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
                <small id="description helper" class="form-text text-muted">Comic description</small>
                @error('description')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>                   
                @enderror                
            </div>
            {{-- //add description --}}


            {{-- add img-url --}}
            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb Url</label>
                <input type="text" class="form-control @error('thumb') url is invalid @enderror" name="thumb" id="thumb" aria-describedby="thumbHelper" placeholder="Insert here the link to the image" value="{{old('thumb')}}">
                <small id="thumbHelper" class="form-text text-muted">Link to the thumb img</small>
                @error('thumb')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>                   
                @enderror
                
            </div>
            {{-- //add img-url --}}

            {{-- price --}}

            <div class="mb-3">
                <label class="form-label" for="price">Price</label>
                <input type="text" class="form-control @error('price') is invalid @enderror"  name ="price" id="price"  value="{{old('price')}}" aria-describedby="priceHelper" placeholder="Insert here the comic price">
                <small id="priceHelper" class="form-text text-muted">Comic price</small>
                @error('price')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>                   
                @enderror
            </div>
            {{-- //price --}}


            {{-- series --}}
            <div class="mb-3">
                <label class="form-label" for="series">Series</label>
                <input type="text" class="form-control @error('series') is invalid @enderror"  name ="series" id="series"  value="{{old('series')}}" aria-describedby="seriesHelper" placeholder="Insert here the comic series">
                <small id="seriesHelper" class="form-text text-muted">Comic series</small>
                @error('series')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>                   
                @enderror
            </div>
            {{-- //series --}}

            {{-- sale_date --}}
            <div class="mb-3">
                <label class="form-label" for="sale_date">Sale date</label>
                <input type="text" class="form-control @error('sale_date') is invalid @enderror"  name ="sale_date" id="sale_date"  value="{{old('sale_date')}}" aria-describedby="sale_dateHelper" placeholder="Insert here the comic sale_date">
                <small id="sale_dateHelper" class="form-text text-muted">Comic sale date</small>
                @error('sale_date')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>                   
                @enderror
            </div>
            {{-- //sale_date --}}

            {{-- type --}}
            <div class="mb-3">
                <label class="form-label" for="type">Type</label>
                <input type="text" class="form-control @error('type') is invalid @enderror"  name ="type" id="type"  value="{{old('type')}}" aria-describedby="typeHelper" placeholder="Insert here the comic type">
                <small id="typeHelper" class="form-text text-muted">Comic type</small>
                @error('type')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>                   
                @enderror
            </div>
            {{-- //type --}}


            <button type="submit" class="btn btn-success my-3">Submit</button>

        </form>

    </div>
@endsection