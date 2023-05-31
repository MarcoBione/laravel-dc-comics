@extends('layouts.app')

@section('modify')
    {{-- <ul>
        <li>

            {{ $comic->description }}

            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-secondary">Edit</a>
            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete" class="btn btn-danger">
            </form>
        </li>
    </ul> --}}

    <div class="container d-flex flex-wrap">
        <div class="card p-2 border-0" style="width: 18rem;">
            <div class="border shadow-sm w-100 h-100">

                <img src="{{ $comic->image }}" class="card-img-top" alt="{{ $comic->title }}">

                <div class="card-body d-flex flex-column">

                    <h5 class="card-title">{{ $comic->title }}</h5>
                    <p class="card-text">{{ $comic->price }}</p>
                    <p class="card-text">{{ $comic->description }}</p>
                    <div class="d-flex align-self-baseline">
                        <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-outline-secondary">Edit</a>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
