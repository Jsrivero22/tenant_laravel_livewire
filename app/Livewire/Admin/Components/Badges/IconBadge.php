<?php

namespace App\Livewire\Admin\Components\Badges;

use Livewire\Component;

class IconBadge extends Component
{
    public $icon;
    public $color = 'primary';
    public $radius = '10';
    public $animate = false; // fadeIn, pulse, etc.
    public $animateInfinite = true;
    public $animateSpeed = 'fast'; // slow, slower, fast, faster
    public $iconSize = 'f-s-22'; // Tamaño del icono

    public function render()
    {
        return view('livewire.admin.components.badges.icon-badge');
    }
}
