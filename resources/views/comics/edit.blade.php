@extends('layouts.app')


@section('main-content')
<div class="container">

    <a href="{{route('comics.index')}}" class="btn btn-success ">
        Torna alla lista
    </a>
    <a href="{{route('comics.show', $comic)}}" class="btn btn-primary">
        mostra dettagli
    </a>
    <h1>Modifica fumetto</h1>

    <form action="{{route('comics.update', $comic)}}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="row">
            <div class="col-4">
                <img id="previewImage" src="{{$comic->thumb}}" alt="" class="img-fluid">
            </div>
            <div class="col-8">
                <div class="row g-3">
                    <div class="col">
                        <label for="title">Titolo</label>
                        <input class="form-control" type="text" name="title" id="title" value="{{$comic->title}}">
                    </div>
                    
                    <div class="col">
                        <label for="price">Prezzo</label>
                        <input class="form-control" type="text" name="price" id="price" value="{{$comic->price}}">
                    </div>
                    
                    <div class="col">
                        <label for="series">Series</label>
                        <input class="form-control" type="text" name="series" id="series" value="{{$comic->series}}">
                    </div>
                    
                    <div class="col">
                        <label for="sale_date">Data pubblicazione</label>
                        <input class="form-control" type="text" name="sale_date" id="sale_date" value="{{$comic->sale_date}}" >
                    </div>
                    
                    <div class="col">
                        <label for="type">Genere</label>
                        <input class="form-control" type="text" name="type" id="type" value="{{$comic->type}}">
                    </div>
                    <div class="col-12">
                        <label for="thumb">Immagine</label>
                        <input class="form-control" type="url" name="thumb" id="thumb" value="{{$comic->thumb}}">
                    </div>
        
                    <div class="col-12">
                        <label for="description">Descrizione</label>
                        <input type="text" id="description" name="description" value="{{$comic->description}}" class="form-control">
                    </div>
        
                    <div class="col-3">
                        <button class="btn btn-primary">Salva</button>
                    </div>
                </div>
            </div>
            
        </div>

        
    
    </form>

</div>
@endsection

@section('script')
<script>
    const previewImageEl = document.getElementById('previewImage');
    const thumbInput = document.getElementById('thumb');

    thumbInput.addEventListener('change' function(){
        previewImageEl.src = this.value;
    })
</script>
@endsection