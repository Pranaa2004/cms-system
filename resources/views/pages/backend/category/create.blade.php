{{-- <form action="{{ route('category.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
        @error('title')
            <div class="alert alert-danger">{{ $error }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control" id="slug" name="slug" required>
        @error('slug')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
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
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Add Category</button>
</form> --}}


<form action="{{ route('category.store') }}" method="POST">
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
        <label for="parent_id" class="form-label fw-semibold">Parent Category</label>
        <select name="parent_id" id="parent_id" class="form-select">
            <option value="0">None</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label fw-semibold">Description</label>
        <textarea class="form-control" id="description" name="description" rows="4"></textarea>
        @error('description')
            <div class="text-danger small mt-1">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary w-100">
        Add Category
    </button>
</form>
