@extends('layouts.main')

@section('content')

<div class="container">
  <h1 class="my-5">{{ $comic->title }} <a href=" {{ route('comics.edit', $comic) }} " class="btn btn-primary">EDIT</a> </h1>  
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
  <a href=" {{ route('comics.index')}} "> torna alla lista </a>
</div>

@endsection