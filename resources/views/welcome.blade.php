@extends('layouts.app');

@section('maincontent')
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
