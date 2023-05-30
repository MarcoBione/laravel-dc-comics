@extends('layouts.app')

@section('indexcontent')
    <main>

        <ul>
            @foreach ($comic as $item)
                <li>
                    {{ $item->title }}
                    {{-- {{ $item->description }}
                    {{ $item->price }} --}}
                    {{-- <a href="{{ route('comic.show', $comic->id) }}">Info</a> --}}
                </li>
            @endforeach
        </ul>

    </main>
@endsection
