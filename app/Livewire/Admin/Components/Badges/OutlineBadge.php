<?php

namespace App\Livewire\Admin\Components\Badges;

use Livewire\Component;

class OutlineBadge extends Component
{
    public $content;
    public $color = 'primary'; // primary, secondary, success, danger, warning, info, dark
    public $pill = false;
    public $icon = null;

    public function render()
    {
        return view('livewire.admin.components.badges.outline-badge');
    }
}
