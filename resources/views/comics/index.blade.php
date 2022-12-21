@extends('layouts.app')
@section('content')
<section class="container">
    <a href="{{route('comics.create')}}">Create comic</a>
    <div class="pt-5">
      <div class="mio_container">
      @foreach ($comics as $comic)    
      <div class="card" style="width: 12rem;">

          <a href="{{route('comics.show', $comic->id)}}"><img src="{{$comic['thumb']}}" class="card-img-top" alt="..."></a>
          <div class="card-body">
            <a href="{{route('comics.show', $comic->id)}}">{{$comic->series}}</a>
          </div>
            <div class="d-flex flex-column justify-content-center align-items-center" id="modifiche">
          <a href="{{route('comics.show', $comic->id)}}" class="btn btn-secondary">Scopri!</a>
          <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-success">Modifica</a>
            
          <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger ">Cancella</button>
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