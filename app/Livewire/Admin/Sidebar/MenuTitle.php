<?php

namespace App\Livewire\Admin\Sidebar;

use Livewire\Component;

class MenuTitle extends Component
{
    public $title;

    public function render()
    {
        return view('livewire.admin.sidebar.menu-title');
    }
}
