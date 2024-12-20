
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container">

    

   
    <h1 style="color: white;">Books List</h1>

<table class="table table-bordered" style="color: white;">
    <thead>
        <tr>
            <th style="color: white;">#</th>
            <th style="color: white;">Title</th>
            <th style="color: white;">Author</th>
            <th style="color: white;">Category</th>
            <th style="color: white;">Description</th>
            <th style="color: white;">Price</th>
            <th style="color: white;">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($books as $book)
            <tr>
                <td style="color: white;">{{ $loop->iteration }}</td>
                <td style="color: white;">{{ $book->title }}</td>
                <td style="color: white;">{{ $book->author->name ?? 'Unknown' }}</td>
                <td style="color: white;">{{ $book->category->name ?? 'Unknown' }}</td>
                <td style="color: white;">{{ $book->description }}</td>
                <td style="color: white;">${{ number_format($book->price, 2) }}</td>
                <td>
                    <a href="{{ route('books.edit', $book->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this book?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('books.create') }}" class="btn btn-success">Add New Book</a>
</div>

</x-app-layout>


