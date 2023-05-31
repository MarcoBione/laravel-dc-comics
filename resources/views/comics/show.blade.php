<ul>
    <li>
        {{ $Comic->title }}
        {{ $Comic->description }}
        {{ $Comic->price }}
        <a href="{{ route('comics.show', $Comic->id) }}">Info</a>
        <a href="{{ route('comics.edit', $Comic->id) }}">Edit</a>
        <a href="{{ route('comics.destroy', $Comic->id) }}">Delete</a>
    </li>
</ul>
