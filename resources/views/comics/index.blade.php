@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('main-content')
<section class="container mt-5">
  <a href="{{route('comics.create')}}" class="btn btn-success">
    Crea nuovo fumetto
  </a>
    <div class="container">
      <h1 class="mb-3">Comics</h1>
      <div class="row">
        @foreach ($comics as $comic)
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <div class="card-body">
                <a href="{{route('comics.show', $comic)}}">
                    <i class="fa-solid fa-eye fa-2xl"></i>
                </a>

                    <p class="card-text">
                  <strong>Titolo:</strong> {{ $comic->title }}<br>
                  <strong>Descrizione:</strong> {{ $comic->description }}<br>
                  <strong>Immagine:</strong> <br><img src="{{ $comic->thumb }}" alt=""><br>
                  <strong>Prezzo:</strong> {{ $comic->price }}<br>
                  <strong>Serie:</strong> {{ $comic->series }}
                  <strong>Data di uscita:</strong> {{ $comic->sale_date }}
                  <strong>Genere:</strong> {{ $comic->type }}
                </p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
</section>  
@endsection
