<ul class="collapse" id="{{ $menuId }}">
    @foreach ($items as $subItem)
        @if (isset($subItem['subItems']))
            <livewire:admin.sidebar.menu-item :item="$subItem" wire:key="subitem-{{ $loop->index }}" />
        @else
            <li class="{{ $subItem['active'] ?? false ? 'active' : '' }}">
                <a href="{{ $subItem['link'] }}">{{ $subItem['title'] }}</a>
            </li>
        @endif
    @endforeach
</ul>
