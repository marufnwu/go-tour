<div class="col-xl-4 col-lg-4 col-md-6 col-12">
    <button
        id="{{ $id }}"
        type="{{ $type }}"
        class="{{ $class }}">
        @if($icon)
            <i class="{{ $icon }}" aria-hidden="true"></i>
        @endif
        {{ $text }}
    </button>
</div>
