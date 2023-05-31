@extends('layouts.app')

@section('indexcontent')
    <main>
        <div class="container p-3">
            <a href="{{ route('comics.create') }}" class="btn btn-primary">Add new comic</a>
        </div>

        <div class="container d-flex flex-wrap">
            @foreach ($comic as $item)
                <div class="card p-2 border-0" style="width: 18rem;">
                    <div class="border shadow-sm w-100 h-100">

                        <img src="{{ $item->image }}" class="card-img-top" alt="{{ $item->title }}">

                        <div class="card-body d-flex flex-column">

                            <h5 class="card-title">{{ $item->title }}</h5>
                            <p class="card-text">{{ $item->series }}</p>

                            <div class="d-flex align-self-baseline">
                                <a href="{{ route('comics.show', $item->id) }}" class="btn btn-primary">Info</a>
                            </div>

                        </div>
                    </div>

                </div>
            @endforeach
        </div>

    </main>
@endsection
