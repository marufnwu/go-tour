<div class="form-group">
    <label for="{{ $id }}" class="font-weight-bold">
        {{ $label }}
        @if($required)
            <span class="text-danger">*</span>
        @endif
    </label>
    <input
        id="{{ $id }}"
        type="{{ $type }}"
        class="{{ $class }}"
        name="{{ $name }}"
        value="{{ old($name, $value) }}"
        placeholder="{{ $placeholder }}"
        @if($required) required @endif
    >
    @error($name)
        <span class="input-error">{{ $message }}</span>
    @enderror
</div>
