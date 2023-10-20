@extends('layouts.app')


@section('main-content')
<div class="container">
    @if ($errors->any())
<div class="alert alert-danger">
    <h4>Correggi i seguenti errori per proseguire:</h4>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

    <a href="{{route('comics.index')}}" class="btn btn-success ">
        Torna alla lista
    </a>
    <h1>Crea fumetto</h1>

    <form action="{{route('comics.store')}}" method="POST">
        @csrf


        <div class="row">

            <div class="col-4">
                <img id="previewImage" src="" alt="" class="img-fluid">
            </div>

            <div class="col-8">
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
                        <input id="thumb" class="form-control" type="text" name="thumb" id="thumb">
                    </div>
    
                    <div class="col-12">
                        <label for="description">Descrizione</label>
                        <input type="text" id="description" name="description" class="form-control">
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