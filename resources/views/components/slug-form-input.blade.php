<div class="form-group">
    <label for="{{ $id }}" class="font-weight-bold">
        {{ $label }}
        @if($required)
            <span class="text-danger">*</span>
        @endif
    </label>
    <input
        id="{{ $id }}"
        type="text"
        class="{{ $class }}"
        name="{{ $name }}"
        value="{{ $value }}"
        placeholder="{{ $placeholder }}"
        @if($required) required @endif
    >
    @error($name)
        <span class="input-error">{{ $message }}</span>
    @enderror
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const slugInput = document.getElementById('{{ $id }}');
        const sourceInput = document.querySelector('[name="{{ $slugFrom }}"]');

        if (slugInput && sourceInput) {
            sourceInput.addEventListener('input', function () {
                slugInput.value = this.value
                    .toLowerCase()
                    .replace(/[^a-z0-9]+/g, '-') // Replace non-alphanumeric characters with a hyphen
                    .replace(/^-+|-+$/g, ''); // Remove leading or trailing hyphens
            });
        }
    });
</script>
