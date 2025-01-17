<div class="form-group">
    <label for="{{ $id }}" class="font-weight-bold">
        {{ $label }}@if($required)<span class="text-danger">*</span>@endif
    </label>
    <select name="{{ $name }}" id="{{ $id }}" class="{{ $class }}">
        @if($placeholder)
            <option value="">{{ $placeholder }}</option>
        @endif
        @foreach($options as $key => $value)
            <option value="{{ $key }}" {{ $selected == $key ? 'selected' : '' }}>
                {{ $value }}
            </option>
        @endforeach
    </select>
    @error($name)
        <span class="input-error">{{ $message }}</span>
    @enderror
</div>
