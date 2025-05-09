<?php

namespace App\Livewire\Admin\Components\Badges;

use Livewire\Component;

class LightBadge extends Component
{
    public $content;
    public $color = 'primary'; // primary, secondary, success, danger, warning, info, dark
    public $radius = null;
    public $icon = null;
    public $iconSize = 'text-base'; // Clases de tamaño: text-xs, text-sm, etc.

    public function render()
    {
        return view('livewire.admin.components.badges.light-badge');
    }
}
