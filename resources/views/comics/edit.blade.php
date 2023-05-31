@extends('layouts.app')

@section('form')
    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf

        @method('PUT')
        <label for="title">Titolo</label>
        <input type="text" name="title" id="title" value="{{ $comic->title }}">

        <label for="description">Descrizione</label>
        <input type="textarea" name="description" id="description" value="{{ $comic->description }}">

        <label for="thumb">Immagine</label>
        <input type="textarea" name="thumb" id="thumb" value="{{ $comic->thumb }}">

        <label for="price">Prezzo</label>
        <input type="text" name="price" id="price" value="{{ $comic->price }}">

        <label for="series">Serie</label>
        <input type="text" name="series" id="series" value="{{ $comic->series }}">

        <label for="type">Tipo</label>
        <input type="text" name="type" id="type" value="{{ $comic->type }}">

        <input type="submit" value="Aggiungi">

    </form>
@endsection
