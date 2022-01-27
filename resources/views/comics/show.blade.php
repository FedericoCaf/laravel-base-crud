@extends('layouts.main')

@section('content')

<div class="container">
  <h1>{{ $comic->title }}</h1>
  <h4> {{ $comic->description }} </h4>

</div>

<div class="container">
  <a href=" {{ route('comics.index')}} "> torna all'inizio </a>
</div>

@endsection