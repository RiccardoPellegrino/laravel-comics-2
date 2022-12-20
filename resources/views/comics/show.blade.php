@extends('layouts.app')
@section('content')
  <section class="container">
   <h1 class="text-white">{{$comic->title}}</h1>
   <p class="text-white">{{$comic->description}}</p>
    <img src="{{$comic->thumb}}" alt="">
   <p class="text-white">{{$comic->prince}}</p>
   <p class="text-white">{{$comic->series}}</p>
   <p class="text-white">{{$comic->sale_date}}</p>
   <p class="text-white">{{$comic->type}}</p>
   
  </section>
@endsection