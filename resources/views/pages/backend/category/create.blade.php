<form action="{{ route('category.store')}}" method="POST" >
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control" id="slug" name="slug" required>
    </div>
    <div class="mb-3">
        <label for="parent_id" class="form-label">Parent Category</label>
        <select name="parent_id" class="form-select" id="parent_id" aria-label="parent_id">
            <option value="0" selected>None</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Add Category</button>
</form>
