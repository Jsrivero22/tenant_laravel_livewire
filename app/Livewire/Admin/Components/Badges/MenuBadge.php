<?php

namespace App\Livewire\Admin\Components\Badges;

use Livewire\Component;

class MenuBadge extends Component
{
    public $content;       // Texto del badge (ej: "3")
    public $color = 'primary';  // Color (primary, success, danger, etc.)
    public $pill = false;  // Si es estilo "pastilla" (rounded-pill)

    public function render()
    {
        return view('livewire.admin.components.badges.menu-badge');
    }
}
