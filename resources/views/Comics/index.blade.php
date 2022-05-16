@extends('templates.base')

@section('titlePage', 'comics')


@section('content')
<main>
    <div class="container">

        <div class="row g-4">
            @foreach ($comics as $comic)
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <a class="text-decoration-none text-dark" href="{{ route('comics.show', $comic) }}">
                    <div class="card h-100 bg-card justify-content-between">
                        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="card-img-top">

                        <h4 class="text-dark p-2">
                            {{ $comic->title }}
                        </h4>
                        <a class="btn btn-dark" href="{{ route('comics.edit', $comic) }}">EDIT</a>

                    </div>
                </a>

            </div>

            @endforeach

            {{ $comics->links() }}
        </div>
    </div>

</main>


@endsection
