@extends('layouts.main')

@section('content')
  
<div class="container">
  <h1> Elenco fumetti</h1>

  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">TITOLO</th>
        <th scope="col">TIPO</th>
        <th colspan="3" scope="col">AZIONI</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($comics as $comic)
      <tr>
        <th scope="row"> {{ $comic->id }} </th>
        <td>{{ $comic->title }}</td>
        <td>{{ $comic->type }}</td>
        <td> <a href=" {{ route('comics.show', $comic) }} " class="btn btn-primary">SHOW</a></td>
        <td> <a href="#" class="btn btn-warning">EDIT</a></td>
        <td> <a href="#" class="btn btn-danger">DELETE</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>


</div>

<div class="container">
   {{ $comics->links() }}
</div>



  

@endsection