@extends('layouts.app')

@section('indexcontent')
    <main>

        <ul>
            @foreach ($comic as $item)
                <li>
                    {{ $item->title }}
                </li>
            @endforeach
        </ul>

    </main>
@endsection
