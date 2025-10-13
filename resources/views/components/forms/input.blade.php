<div class="mb-3">
    @isset($label)
        <label for="{{ $name }}" class="col-form-label">{{ $label }}</label>
    @endisset
    <input type="{{ $type ?? 'text' }}" name="{{ $name }}" id="{{ $name }}" class="{{ $input_class }}"
        {{ $addtional }}>
</div>  
