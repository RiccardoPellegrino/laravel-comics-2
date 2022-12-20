@extends('layouts.app')
@section('content')
<section class="container">
    <form action="{{ route('comics.store') }}" method="POST" class="text-white">
        @csrf

            <div>
                <label for="title">Titolo</label>
                <input type="text" name="title" id="title">
            </div>

            <div>
                <label for="description">Descrizione</label>
                <input type="text" name="description" id="description">
            </div>

            <div>
                <label for="thumb">Thumb</label>
                <input type="text" name="thumb" id="thumb">
            </div>

            <div>
                <label for="price">Prezzo</label>
                <input type="text" name="price" id="price">
            </div>

            <div>
                <label for="series">Serie</label>
                <input type="text" name="series" id="series">
            </div>

            <div>
                <label for="sale_date">Data di uscita</label>
                <input type="text" name="sale_date" id="sale_date">
            </div>

            <div>
                <label for="type">Tipo</label>
                <input type="text" name="type" id="type">
            </div>

            <div>
                <label for="artists">Artista</label>
                <input type="text" name="artists" id="artists">
            </div>

            <div>
                <label for="writers">Scrittore</label>
                <input type="text" name="writers" id="writers">
            </div>

            <div>
                <input type="submit" value="Invia">
            </div>
        </form>
     
</section>
@endsection