<form action="{{ route('category.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="name" class="form-label fw-semibold">Name</label>
        <input type="text" class="form-control" id="name" name="name">
        <x-error-alert err_field='name' />
    </div>

    <div class="mb-3">
        <label for="slug" class="form-label fw-semibold">Slug</label>
        <input type="text" class="form-control" id="slug" name="slug">
        <x-error-alert err_field='slug' />
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
        <x-error-alert err_field='description' />
    </div>

    <button type="submit" class="btn btn-primary w-100">
        Add Category
    </button>
</form>
