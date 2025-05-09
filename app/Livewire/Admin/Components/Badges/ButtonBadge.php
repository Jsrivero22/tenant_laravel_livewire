<?php

namespace App\Livewire\Admin\Components\Badges;

use Livewire\Component;

class ButtonBadge extends Component
{
    public $content;
    public $buttonText;
    public $color = 'primary';
    public $style = 'light'; // light, outline
    public $badgeType = 'basic'; // basic, pill, icon
    public $badgeContent;
    public $position = 'top-end';
    public $animate = false;

    public function render()
    {
        return view('livewire.admin.components.badges.button-badge');
    }
}
