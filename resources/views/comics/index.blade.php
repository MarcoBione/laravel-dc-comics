@extends('layouts.app')

@section('indexcontent')
    <main>
        <a href="{{ route('comics.create') }}">Add</a>
        <ul>
            @foreach ($comic as $item)
                <li>
                    {{ $item->title }}
                    {{ $item->description }}
                    {{ $item->price }}
                    <a href="{{ route('comics.show', $item->id) }}">Info</a>
                    <a href="{{ route('comics.edit', $item->id) }}">Edit</a>
                    <a href="{{ route('comics.destroy', $item->id) }}">Delete</a>
                </li>
            @endforeach
        </ul>

    </main>
@endsection
