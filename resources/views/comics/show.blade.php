@extends('layouts.main')

@section('content')

<div class="container">
  <h1>{{ $comic->title }}</h1>
  <div class="row">
      <div class="col-4">
          <img class="img-fluid" src=" {{ $comic->image }} " alt="comic">
      </div>
      <div class="col-8"> 
        <p> {{ $comic->description }} </p>
      </div>
  </div>
  


</div>

<div class="container">
  <a href=" {{ route('comics.index')}} "> torna all'inizio </a>
</div>

@endsection