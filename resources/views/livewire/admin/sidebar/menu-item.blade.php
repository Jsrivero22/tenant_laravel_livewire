<li class="{{ isset($item['subItems']) ? '' : 'no-sub' }} {{ $item['active'] ?? false ? 'active' : '' }}">
    <a
        @if (isset($item['subItems'])) data-bs-toggle="collapse"
           href="#{{ \Illuminate\Support\Str::slug($item['title']) }}"
           aria-expanded="{{ $item['active'] ?? false ? 'true' : 'false' }}"
       @else
           href="{{ $item['link'] ?? '#' }}" @endif>
        @isset($item['icon'])
            <livewire:admin.components.icon
                :icon="$item['icon']"
                size="lg"
            />
        @endisset
        {{ $item['title'] }}

        @isset($item['badge'])
            <livewire:admin.components.badges.menu-badge
                :content="$item['badge']"
                :color="$item['badgeColor'] ?? 'primary'"
                :pill="$item['badgePill'] ?? false"
            />
        @endisset
    </a>

    @isset($item['subItems'])
        <livewire:admin.sidebar.sub-menu :items="$item['subItems']" :menuId="\Illuminate\Support\Str::slug($item['title'])" />
    @endisset
</li>
