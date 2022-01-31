@extends('layouts.main')

@section('content')

<div class="container">
  <div class="row">

    <div class="col-8 offset-2">
{{-- 
      @if ($errors->any())
          <div class="alert alert-danger" role="alert">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{$error}}</li>
                  @endforeach
              </ul>
          </div>
      @endif --}}


      <h1 class="my-5">Modifica di {{ $comic->title }} </h1>

    <form action=" {{ route('comics.update', $comic) }} " method="POST">
      @csrf
      @method('PUT')

      <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text " class="form-control @error('title') is-invalid @enderror" 
        value=" {{ old('title', $comic->title) }} "
         name="title" id="title" placeholder="titolo">
         @error('title')
            <p class="form_errors">
                {{ $message }}
            </p>
         @enderror
      </div>

      <div class="mb-3">
        <label for="type" class="form-label">Tipo</label>
        <input type="text " class="form-control @error('type') is-invalid @enderror"
         value=" {{ old('type', $comic->type) }} "
         name="type" id="type"  placeholder="tipologia">
         @error('type')
            <p class="form_errors">
                {{ $message }}
            </p>
         @enderror
      </div>

      <div class="mb-3">
        <label for="series" class="form-label">Serie</label>
        <input type="text " class="form-control @error('series') is-invalid @enderror" 
        value=" {{ old('series', $comic->series) }} " 
        name="series" id="series"  placeholder="serie">
        @error('series')
            <p class="form_errors">
                {{ $message }}
            </p>
         @enderror
      </div>

      <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="number" class="form-control @error('price') is-invalid @enderror"
        value=" {{ old('price', $comic->price) }} "
        name="price" id="price"  placeholder="prezzo">
        @error('price')
            <p class="form_errors">
                {{ $message }}
            </p>
         @enderror
      </div>

      <div class="mb-3">
        <label for="date" class="form-label">Data di vendita</label>
        <input type="date" class="form-control @error('sale_date') is-invalid @enderror" 
        value=" {{ old('sale_date', $comic->sale_date) }} "
        name="sale_date" id="sale_date"  placeholder="data di vendita">
        @error('sale_date')
          <p class="form_errors">
              {{ $message }}
          </p>
        @enderror
      </div>

      <div class="mb-3">
        <label for="image" class="form-label">Url immagine</label>
        <input type="text" class="form-control @error('image') is-invalid @enderror" 
        value=" {{ old('image', $comic->image) }} "
        name="image" id="image"  placeholder="url immagine">
        @error('image')
          <p class="form_errors">
              {{ $message }}
          </p>
        @enderror
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea type="text" class="form-control" name="description" id="description"  placeholder="descrizione"> {{ old('description', $comic->description) }} </textarea>
      </div>
     
    
      <button type="submit" class="btn btn-primary">Invia</button>
      <button type="reset" class="btn btn-secondary">Reset</button>
    </form>
    </div>

  </div>
  


</div>


@endsection