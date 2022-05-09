@extends('templates.base')

@section('titlePage', 'comicTitle')


@section('content')
    <div>
        <h2>{{ $comic->title }}</h2>
    </div>

@endsection
