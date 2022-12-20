@extends('layouts.app')
@section('content')
<section class="container">
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
     
        <label for="title">Title</label>
        <input type="text" name="title" id="title">
     
        <label for="description">Description</label>
        <input type="text" name="description" id="description">
     
        <label for="thumb">Type</label>
        <input type="text" name="thumb" id="thumb">

        <input type="submit" value="Invia">
     </form>
     
</section>
@endsection