<?php

namespace App\Livewire\Admin\Components\Badges;

use Livewire\Component;

class BasicBadge extends Component
{
    public $content;
    public $color = 'primary'; // primary, secondary, success, danger, warning, info, light, dark
    public $radius = null; // 0, 4, 6, 8, 10
    public $icon = null;
    public $iconPosition = 'left'; // left, right

    public function render()
    {
        return view('livewire.admin.components.badges.basic-badge');
    }
}
