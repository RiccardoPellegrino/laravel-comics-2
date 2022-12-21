@extends('layouts.app')
@section('content')
    <section class="container">
        <div class="text-center">
            <div class="pt-2" id="creare">
                <button class="btn btn-secondary"><a href="{{ route('comics.create') }}" class="text-white">Crea un
                        comic</a></button>
            </div>
        </div>
        <div class="pt-5">
            <div class="mio_container">
                @foreach ($comics as $comic)
                    <div class="card" style="width: 12rem;">

                        <a href="{{ route('comics.show', $comic->id) }}"><img src="{{ $comic['thumb'] }}"
                                class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <a href="{{ route('comics.show', $comic->id) }}">{{ $comic->series }}</a>
                        </div>
                        <div class="d-flex justify-content-center align-items-center" id="modifiche">
                            <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-secondary">Dettagli</a>
                            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-success ms-2">Modifica</a>
                        </div>
                        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <div class="bg-dark">
                                <button type="submit" class="btn btn-danger w-100">Cancella</button>
                            </div>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="d-flex justify-content-center pb-3">
            <button class="btn btn-primary mt-5">LOAD MORE</button>
        </div>

    </section>
@endsection
