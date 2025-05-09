<span class="badge text-bg-{{ $color }} {{ $radius ? 'b-r-' . $radius : '' }}">
    @if ($icon && $iconPosition === 'left')
        <i class="{{ $icon }} me-1"></i>
    @endif
    {{ $content }}
    @if ($icon && $iconPosition === 'right')
        <i class="{{ $icon }} ms-1"></i>
    @endif
</span>
