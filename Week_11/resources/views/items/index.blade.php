<!DOCTYPE html>
<html>
<head>
    <title>Items List</title>
</head>
<body>
<h1>Items List</h1>
<a href="{{ route('items.create') }}">Create New Item</a>
<ul>
    @foreach ($items as $item)
        <li>
            {{ $item->name }} - {{ $item->description }}
            <a href="{{ route('items.edit', $item->id) }}">Edit</a>
            <form action="{{ route('items.destroy', $item->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ul>
</body>
</html>
