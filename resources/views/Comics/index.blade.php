@extends('templates.base')

@section('titlePage', 'comics')


@section('content')
    <div class="container">

        <div class="row g-3">
            @foreach ($comics as $comic)
            <div class="col-3">
                <div class="card h-100">

                    <h1>
                        <a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a>
                    </h1>

                    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                </div>
            </div>

            @endforeach

            {{ $comics->links() }}
        </div>
    </div>


@endsection
