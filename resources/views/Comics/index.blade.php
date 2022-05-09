@extends('templates.base')

@section('titlePage', 'comics')


@section('content')
    <div class="container">

        <div class="row g-4">
            @foreach ($comics as $comic)
            <div class="col-2">
                <a class="text-decoration-none text-dark" href="{{ route('comics.show', $comic->id) }}">
                    <div class="card h-100">
                        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="card-img-top">

                        <h3 class="text-dark">
                            {{ $comic->title }}
                        </h3>
                    </div>
                </a>
            </div>

            @endforeach

            {{ $comics->links() }}
        </div>
    </div>


@endsection
