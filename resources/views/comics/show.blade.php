@extends('layouts.app')


@section('main-content')

    <div class="container">
        
        <a href="{{route('comics.index')}}" class="btn btn-success">
            Torna alla lista
        </a>
        <a href="{{route('comics.edit', $comic)}}" class="btn btn-primary">
            modifica
        </a>
        <h1>{{ $comic->title }}</h1> 

        <div class="row g-4">
            
            
            <div class="col-3">
                <img src="{{ $comic->thumb }}" alt=""><br>
            </div>

            
            
            <div class="col-3">
                <strong>Prezzo:</strong> {{ $comic->price }}<br>
            </div>
            <div class="col">
                <strong>Serie:</strong> {{ $comic->series }}
            </div>
            <div class="col">
                <strong>Data di uscita:</strong> {{ $comic->sale_date }}
            </div>
            <div class="col">
                <strong>Genere:</strong> {{ $comic->type }}
            </div>
            
            <div class="col-12">
                <strong>Descrizione:</strong> {{ $comic->description }}
            </div>
        </div>
    </div>

@endsection