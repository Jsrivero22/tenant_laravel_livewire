<?php

namespace App\Livewire\Admin\Sidebar;

use Livewire\Component;

class SubMenu extends Component
{
    public $items;
    public $menuId;

    public function render()
    {
        return view('livewire.admin.sidebar.sub-menu');
    }
}
