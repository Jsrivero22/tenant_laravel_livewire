<nav class="dark-sidebar" aria-label="Main navigation">
    <livewire:admin.sidebar.menu-logo :logo="$logo" />

    <div class="app-nav simplebar-scrollable-y" id="app-simple-bar">
        <div class="simplebar-wrapper">
            <!-- SimpleBar estructura... -->
            <div class="simplebar-content">
                <livewire:admin.sidebar.menu-list :items="$items" />
            </div>
        </div>
    </div>

    <div class="menu-navs">
        <span class="menu-previous d-none"><i class="ti ti-chevron-left"></i></span>
        <span class="menu-next d-none"><i class="ti ti-chevron-right"></i></span>
    </div>
</nav>
