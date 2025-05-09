<?php

namespace App\Livewire\Admin\Sidebar;

use Livewire\Component;
use App\Helpers\Admin\Menu\MenuHelper;

class Master extends Component
{
    public $logo;
    public $items;

    public function mount()
    {
        $menuItems = MenuHelper::getMenuItems();

        $this->logo = $menuItems['logo'];
        $this->items = $menuItems['items'];
    }

    public function render()
    {
        return view('livewire.admin.sidebar.master');
    }
}
