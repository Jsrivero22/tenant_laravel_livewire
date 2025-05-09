<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;

class Icon extends Component
{
    public $iconString; // Cadena completa del icono (ej: "ti ti-home")
    public $size = 'base'; // xs, sm, base, lg, xl
    public $additionalClasses = '';

    // Tamaños para cada librería
    protected $sizeClasses = [
        'xs' => 'text-xs',
        'sm' => 'text-sm',
        'base' => 'text-base',
        'lg' => 'text-lg',
        'xl' => 'text-xl',
        '2xl' => 'text-2xl'
    ];

    public function mount($icon, $size = 'base', $class = '')
    {
        $this->iconString = $icon;
        $this->size = $size;
        $this->additionalClasses = $class;
    }

    public function render()
    {
        return view('livewire.admin.components.icon', [
            'iconClasses' => $this->buildIconClasses()
        ]);
    }

    protected function buildIconClasses()
    {
        $sizeClass = $this->sizeClasses[$this->size] ?? '';

        return trim("{$this->iconString} {$sizeClass} {$this->additionalClasses}");
    }
}
