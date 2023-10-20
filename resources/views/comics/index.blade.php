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
                <div class="d-flex my-3 gap-3 justify-content-center align-items-center ">

                  <a href="{{route('comics.show', $comic)}}">
                    <i class="fa-solid fa-eye fa-2xl"></i>
                  </a>
                  <a href="{{route('comics.edit', $comic)}}">
                    <i class="fa-solid fa-pencil fa-2xl"></i>
                  </a>
                  <a type="button" data-bs-toggle="modal" data-bs-target="#delete-modal-{{$comic->id}}">
                    <i class="fa-solid fa-trash fa-2xl text-danger"></i>
                  </a>
                  <div class="modal fade" id="delete-modal-{{$comic->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Modifica dell'elemento</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Sei ciruco di voler eliminare questo elemento?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                          <form action="{{route('comics.destroy', $comic)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            
                           <button class="btn btn-danger">Elimina</button>
        
                            
                            
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                    
                  
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
