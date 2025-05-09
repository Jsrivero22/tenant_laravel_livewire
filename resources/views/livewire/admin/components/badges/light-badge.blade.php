<span class="badge text-light-{{ $color }} {{ $radius ? 'b-r-' . $radius : '' }}">
    @if ($icon)
        <i class="{{ $icon }} {{ $iconSize }} me-1"></i>
    @endif
    {{ $content }}
</span>
