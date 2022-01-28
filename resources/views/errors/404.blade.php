@extends('layouts.main')

@section('content')

<div class="container text-center">
  <h1>ERRORE 404</h1>
  <h4>Pagina non trovata  </h4>
  <p> {{ $exception->getMessage() }} </p>

</div>


@endsection