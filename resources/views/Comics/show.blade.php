@extends('templates.base')

@section('titlePage', 'comicTitle')


@section('content')
    <div>
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        <h2>{{ $comic->title }}</h2>
        <div>{{ $comic->price }}</div>
        <div>{{ $comic->series }}</div>
        <div>{{ $comic->sale_date }}</div>
        <div>{{ $comic->type }}</div>
        <p>{{ $comic->description }}</p>
    </div>

@endsection
