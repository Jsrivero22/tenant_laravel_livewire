<ul class="main-nav p-0 mt-2">
    @foreach($items as $item)
        @if($item['type'] === 'title')
            <livewire:admin.sidebar.menu-title
                :title="$item['title']"
                wire:key="title-{{ $loop->index }}"
            />
        @else
            <livewire:admin.sidebar.menu-item
                :item="$item"
                wire:key="item-{{ $loop->index }}"
            />
        @endif
    @endforeach
</ul>
