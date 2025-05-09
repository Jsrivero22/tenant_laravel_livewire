<span
    class="position-absolute {{ $this->positionClasses() }} translate-middle {{ $size }} bg-{{ $color }} {{ $border ? 'border border-light' : '' }} rounded-circle">
    @if ($hiddenText)
        <span class="visually-hidden">{{ $content }}</span>
    @endif
</span>
