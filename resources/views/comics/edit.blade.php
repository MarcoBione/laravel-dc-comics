@extends('layouts.app')

@section('form')
    <form action="{{ route('comics.update', $comic->id) }}" method="POST" class="d-flex flex-column container-sm">
        @csrf

        @method('PUT')
        <label for="title" class="form-label">Titolo</label>
        <input type="text" name="title" id="title" value="{{ $comic->title }}" class="form-control">

        <label for="description" class="form-label">Descrizione</label>
        <input type="textarea" name="description" id="description" value="{{ $comic->description }}" class="form-control">

        <label for="thumb" class="form-label">Immagine</label>
        <input type="textarea" name="thumb" id="thumb" value="{{ $comic->thumb }}" class="form-control">

        <label for="price" class="form-label">Prezzo</label>
        <input type="text" name="price" id="price" value="{{ $comic->price }}" class="form-control">

        <label for="series" class="form-label">Serie</label>
        <input type="text" name="series" id="series" value="{{ $comic->series }}" class="form-control">

        <label for="type" class="form-label">Tipo</label>
        <input type="text" name="type" id="type" value="{{ $comic->type }}" class="form-control">

        <div class="text-center p-3">
            <input type="submit" value="Salva" class="btn btn-outline-success w-25">
            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete" class="btn btn-outline-danger">
            </form>
        </div>




    </form>
@endsection
