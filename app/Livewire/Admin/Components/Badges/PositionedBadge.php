<?php

namespace App\Livewire\Admin\Components\Badges;

use Livewire\Component;

class PositionedBadge extends Component
{
    public $content;
    public $color = 'primary';
    public $position = 'top-start'; // top-start, top-end, bottom-start, bottom-end
    public $size = 'p-1'; // p-1, p-2
    public $border = true;
    public $hiddenText = true;

    public function render()
    {
        return view('livewire.admin.components.badges.positioned-badge');
    }

    public function positionClasses()
    {
        return [
            'top-start' => 'top-0 start-0',
            'top-end' => 'top-0 start-100',
            'bottom-start' => 'top-100 start-0',
            'bottom-end' => 'top-100 start-100'
        ][$this->position] ?? 'top-0 start-100';
    }
}
