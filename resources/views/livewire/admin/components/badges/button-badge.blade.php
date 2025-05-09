<button type="button" class="btn btn-{{ $style }}-{{ $color }} position-relative">
    {{ $buttonText }}

    @if ($badgeType === 'basic')
        <span class="badge text-bg-{{ $color }}">{{ $badgeContent }}</span>
    @elseif($badgeType === 'pill')
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-{{ $color }}">
            {{ $badgeContent }}
        </span>
    @elseif($badgeType === 'icon')
        <span
            class="position-absolute top-0 start-100 translate-middle p-2 bg-{{ $color }} border border-light rounded-circle">
            <i class="{{ $badgeContent }}"></i>
        </span>
    @endif
</button>
