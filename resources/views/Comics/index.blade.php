@extends('templates.base')

@section('titlePage', 'comics')


@section('content')
    <div>
        @foreach ($comics as $comic)
            <h1>{{ $comic->title }}</h1>
        @endforeach

        {{ $comics->links() }}
    </div>

@endsection
