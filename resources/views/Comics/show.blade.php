@extends('templates.base')

@section('titlePage', $comic->title)


@section('content')
    <div class="container">
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        <h2 class="py-3">{{ $comic->title }}</h2>
        <div class="py-1">
            <span>Price: </span>
            <span class="fw-bold">{{ $comic->price }} &euro;</span>
        </div>
        <div class="py-1">
            <span>Series: </span>
            <span class="fw-bold">{{ $comic->series }}</span>
        </div>
        <div class="py-1">
            <span>Sale Date: </span>
            <span class="fw-bold">{{ $comic->sale_date }}</span>
        </div>
        <div class="py-1">
            <span>Comic Type: </span>
            <span class="fw-bold">{{ $comic->type }}</span>
        </div>
        <p class="py-3">{{ $comic->description }}</p>
    </div>

@endsection
