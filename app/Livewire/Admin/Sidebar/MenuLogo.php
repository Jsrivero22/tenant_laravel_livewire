<?php

namespace App\Livewire\Admin\Sidebar;

use Livewire\Component;

class MenuLogo extends Component
{
    public $logo;

    public function render()
    {
        return view('livewire.admin.sidebar.menu-logo');
    }
}
