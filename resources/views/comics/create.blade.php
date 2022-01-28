@extends('layouts.main')

@section('content')

<div class="container">
  <div class="row">

    <div class="col-8 offset-2">
      <h1 class="my-5">Aggiungi un nuovo fumetto</h1>

    <form action=" {{ route('comics.store') }} " method="POST">
      @csrf

      <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text " class="form-control" name="title" id="title" placeholder="titolo">
      </div>
      <div class="mb-3">
        <label for="type" class="form-label">Tipo</label>
        <input type="text " class="form-control" name="type" id="type"  placeholder="tipologia">
      </div>
      <div class="mb-3">
        <label for="series" class="form-label">Serie</label>
        <input type="text " class="form-control" name="series" id="series"  placeholder="serie">
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="number" class="form-control" name="price" id="price"  placeholder="prezzo">
      </div>
      <div class="mb-3">
        <label for="date" class="form-label">Data di vendita</label>
        <input type="date" class="form-control" name="sale_date" id="sale_date"  placeholder="data di vendita">
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Url immagine</label>
        <input type="text" class="form-control" name="image" id="image"  placeholder="url immagine">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea type="text" class="form-control" name="description" id="description"  placeholder="descrizione"> </textarea>
      </div>
     
    
      <button type="submit" class="btn btn-primary">Invia</button>
      <button type="reset" class="btn btn-secondary">Reset</button>
    </form>
    </div>

  </div>
  


</div>


@endsection