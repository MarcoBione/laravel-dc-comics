@extends('layouts.app')

@section('form')
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf

        <label for="title">Titolo</label>
        <input type="text" name="title" id="title">

        <label for="description">Descrizione</label>
        <input type="textarea" name="description" id="description">

        <label for="thumb">Immagine</label>
        <input type="textarea" name="thumb" id="thumb">

        <label for="price">Prezzo</label>
        <input type="text" name="price" id="price">

        <label for="series">Serie</label>
        <input type="text" name="series" id="series">

        <label for="type">Tipo</label>
        <input type="text" name="type" id="type">

        <input type="submit" value="Aggiungi">

    </form>
@endsection
