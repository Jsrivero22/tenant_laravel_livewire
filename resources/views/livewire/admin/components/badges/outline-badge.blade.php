<span class="badge text-outline-{{ $color }} {{ $pill ? 'rounded-pill' : '' }}">
    @if ($icon)
        <i class="{{ $icon }} me-1"></i>
    @endif
    {{ $content }}
</span>
