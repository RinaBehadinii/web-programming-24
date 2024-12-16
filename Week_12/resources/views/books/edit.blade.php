
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')

      
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" 
                   value="{{ old('title', $book->title) }}" required>
           
            <label for="author_id" class="form-label">Author</label>
            <select name="author_id" id="author_id" class="form-control" required>
                <option value="" disabled>Select an Author</option>
                @foreach ($authors as $author)
                    <option value="{{ $author->id }}" {{ old('author_id', $book->author_id) == $author->id ? 'selected' : '' }}>
                        {{ $author->name }}
                    </option>
                @endforeach
            </select>
  
            <label for="category_id" class="form-label">Category</label>
            <select name="category_id" id="category_id" class="form-control" required>
                <option value="" disabled>Select a Category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id', $book->category_id) == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
               
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" rows="4" class="form-control">{{ old('description', $book->description) }}</textarea>
        
            <label for="price" class="form-label">Price</label>
            <input type="number" name="price" id="price" class="form-control" 
                   value="{{ old('price', $book->price) }}" step="0.01" required>
  
        <button type="submit" class="btn btn-primary">Update Book</button>
        <a href="{{ route('books.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>

