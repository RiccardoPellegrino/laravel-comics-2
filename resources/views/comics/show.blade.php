@extends('layouts.app')
@section('content')
    <section class="text-white p-5">
        <h1>{{$comic->title}}</h1>
        <p>{{$comic->description}}</p>
        <img src={{$comic->thumb}} alt="">
        <div>
            <span>{{$comic->price}}</span>
            <br>
            <span>{{$comic->series}}</span>
            <br>
            <span>{{$comic->sale_date}}</span>
            <br>
            <span>{{$comic->type}}</span>
        </div>
    </section>
    <div class="d-flex justify-content-center align-content-center">
        <div class="load_button">
            <span><a href="{{ route('comics.index') }}" class="text-white text-uppercase text-decoration-none">back</a></span>
        </div>
    </div> 
@endsection