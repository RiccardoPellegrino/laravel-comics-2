@extends('layouts.app')
@section('content')
<section class="w-75 m-auto text-center py-5">
    <form action="{{ route('comics.update', $comic->id) }}" method="POST" class="text-white">
        @csrf
        @method('PUT')
        <div class="d-flex flex-column align-items-center mb-2">
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" placeholder="Inserisci un titolo" class="w-25 p-1" value="{{old('title', $comic->title)}}" required>
        </div>

        <div class="d-flex flex-column align-items-center mb-2">
            <label for="description">Descrizione</label>
            <input type="text" name="description" id="description" placeholder="Inserisci una descrizione" class="w-25 p-1" value="{{old('description', $comic->description)}}" required>
        </div>

        <div class="d-flex flex-column align-items-center mb-2">
            <label for="thumb">Thumb</label>
            <input type="text" name="thumb" id="thumb" placeholder="Inserisci un'immagine" class="w-25 p-1" value="{{old('thumb', $comic->thumb)}}" required>
        </div>

        <div class="d-flex flex-column align-items-center mb-2">
            <label for="price">Prezzo</label>
            <input type="text" name="price" id="price" placeholder="Inserisci un prezzo" class="w-25 p-1" value="{{old('price', $comic->prince)}}" required>
        </div>

        <div class="d-flex flex-column align-items-center mb-2">
            <label for="series">Serie</label>
            <input type="text" name="series" id="series"  placeholder="Inserisci la serie" class="w-25 p-1" value="{{old('series', $comic->series)}}" required>
        </div>

        <div class="d-flex flex-column align-items-center mb-2">
            <label for="sale_date">Data di uscita</label>
            <input type="text" name="sale_date" id="sale_date" placeholder="aaaa-mm-gg" class="w-25 p-1" value="{{old('sale_date', $comic->sale_date)}}" required>
        </div>

        <div class="d-flex flex-column align-items-center mb-2">
            <label for="type">Tipo</label>
            <input type="text" name="type" id="type"  placeholder="Inserisci il tipo" class="w-25 p-1" value="{{old('type', $comic->type)}}" required>
        </div>

        <div class="d-flex flex-column align-items-center mb-2">
            <label for="artists">Artista</label>
            <input type="text" name="artists" id="artists"  placeholder="Inserisci gli artisti" class="w-25 p-1" value="{{old('artists', $comic->artists)}}" required>
        </div>

        <div class="d-flex flex-column align-items-center mb-4">
            <label for="writers">Scrittore</label>
            <input type="text" name="writers" id="writers" placeholder="Inserisci gli scrittori" class="w-25 p-1" value="{{old('writers', $comic->writers)}}" required>
        </div>

        <div>
            <button type="submit" class="btn btn-success">Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </div>
     </form>
</section>
@endsection