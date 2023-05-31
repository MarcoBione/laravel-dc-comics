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
                    <form action="{{ route('comics.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete">
                    </form>
                </li>
            @endforeach
        </ul>

    </main>
@endsection
