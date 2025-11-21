<form action="{{ route('tags.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label fw-semibold">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
        @error('name')
            <div class="text-danger small mt-1">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="slug" class="form-label fw-semibold">Slug</label>
        <input type="text" class="form-control" id="slug" name="slug" required>
        @error('slug')
            <div class="text-danger small mt-1">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="description" class="form-label fw-semibold">Description</label>
        <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
        @error('description')
            <div class="text-danger small mt-1">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary w-100">Add Tags</button>
</form>
