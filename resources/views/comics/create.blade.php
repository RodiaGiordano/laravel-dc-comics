@extends('layouts.app')


@section('main-content')
<div class="container">

    <a href="{{route('comics.index')}}" class="btn btn-success ">
        Torna alla lista
    </a>
    <h1>Crea fumetto</h1>

    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <div class="row g-3">
            <div class="col">
                <label for="title">Titolo</label>
                <input class="form-control" type="text" name="title" id="title">
            </div>
            
            <div class="col">
                <label for="price">Prezzo</label>
                <input class="form-control" type="text" name="price" id="price">
            </div>
            
            <div class="col">
                <label for="series">Series</label>
                <input class="form-control" type="text" name="series" id="series">
            </div>
            
            <div class="col">
                <label for="sale_date">Data pubblicazione</label>
                <input class="form-control" type="text" name="sale_date" id="sale_date" >
            </div>
            
            <div class="col">
                <label for="type">Genere</label>
                <input class="form-control" type="text" name="type" id="type">
            </div>
            <div class="col-12">
                <label for="thumb">Immagine</label>
                <input class="form-control" type="string" name="thumb" id="thumb">
            </div>

            <div class="col-12">
                <label for="description">Descrizione</label>
                <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
            </div>

            <div class="col-3">
                <button class="btn btn-primary">Salva</button>
            </div>
        </div>
    
    </form>

</div>
    

@endsection