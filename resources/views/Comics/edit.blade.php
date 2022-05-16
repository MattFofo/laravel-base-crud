@extends('templates.base')

@section('titlePage', 'Edit Comic')


@section('content')
    <div class="container">

        <form method="POST" action="{{ route(('comics.update'), $comic) }}">
        @csrf
        @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
            </div>
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" rows="3" id="description" name="description">{{ old(('description'), $comic->description) }}</textarea>
            </div>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb URL</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
            </div>
            @error('thumb')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $comic->price }}">
            </div>
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
            </div>
            @error('series')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
            </div>
            @error('sale_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}">
            </div>
            @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <button type="submit" class="btn btn-primary">Submit</button>




        </form>
        <button id="confirm-delete" class="btn btn-warning">DELETE</button>
        <a class="btn btn-dark" href="{{ url()->previous() }}">BACK</a>
    </div>

    {{-- form  --}}
    <div class="overlay-delete-alert invisible">
        <div class="content-delete-alert">
            <h2>Wanna delete?</h2>
            {{-- DELETE --}}
            <form class="d-flex my-2" action="{{ route('comics.destroy', $comic) }}" method="POST">
                @csrf
                @method('DELETE')

                <button class="btn btn-danger" type="submit" value="DELETE">YES, DELETE IT</button>

                <button id="not-delete" class="btn btn-success" type="button">NO, KEEP IT</button>
            </form>
        </div>


    </div>

@endsection
