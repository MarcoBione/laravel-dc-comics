<ul>
    <li>
        {{ $comic->title }}
        {{ $comic->description }}
        {{ $comic->price }}
        <a href="{{ route('comics.show', $comic->id) }}">Info</a>
        <a href="{{ route('comics.edit', $comic->id) }}">Edit</a>
        <a href="{{ route('comics.destroy', $comic->id) }}">Delete</a>
    </li>
</ul>
