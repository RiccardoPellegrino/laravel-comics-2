@extends('layouts.app')
@section('content')
<section class="container">
    <ul>
        @foreach ($comics as $comic)
          <li><a href="{{route('comics.show', $comic->id)}}">{{$comic->title}}</a></li>
        @endforeach
    </ul>
    <a href="{{route('comics.create')}}">Create comic</a>
    <div class="pt-5">
      <div class="mio_container">
      @foreach ($comics as $comic)
      
      <div class="card" style="width: 12rem;">
          <img src="{{$comic['thumb']}}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-title text-white">{{$comic['series']}}</p>
          </div>
        </div>
        @endforeach
      </div>
      </div>
      <div class="d-flex justify-content-center pb-3">
      <button class="btn btn-primary">LOAD MORE</button>
      </div>
  </section>
  @endsection