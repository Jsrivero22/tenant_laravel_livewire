<a href="#" class="position-relative bg-light-{{ $color }} px-2 py-1 b-r-{{ $radius }}">
    <i class="{{ $icon }} {{ $iconSize }}"></i>
    <span
        class="position-absolute top-0 start-100 translate-middle p-1 bg-{{ $color }} rounded-circle {{ $animate ? 'animate__animated animate__' . $animate : '' }} {{ $animateInfinite ? 'animate__infinite' : '' }} {{ $animateSpeed ? 'animate__' . $animateSpeed : '' }}"></span>
</a>
