<?php

namespace App\Livewire\Admin\Sidebar;

use Livewire\Component;
use Illuminate\Support\Str;

class MenuItem extends Component
{
    public $item;
    public $level = 0;
    public $isActive = false;
    public $isOpen = false;
    public $submenuId;

    public function mount()
    {
        $this->submenuId = 'submenu-' . Str::slug($this->item['title']) . '-' . $this->level;
        $this->checkActiveState();
    }

    protected function checkActiveState()
    {
        $currentUrl = url()->current();

        // Verificar si el ítem actual está activo
        if (isset($this->item['link'])) {
            $this->isActive = $currentUrl === $this->item['link'];
        }

        // Verificar sub-ítems recursivamente
        if (isset($this->item['subItems'])) {
            foreach ($this->item['subItems'] as $subItem) {
                if (isset($subItem['link']) && $currentUrl === $subItem['link']) {
                    $this->isActive = true;
                    $this->isOpen = true;
                    break;
                }
            }
        }
    }

    public function toggleSubmenu()
    {
        if (isset($this->item['subItems'])) {
            $this->isOpen = !$this->isOpen;
        }
    }

    public function render()
    {
        return view('livewire.admin.sidebar.menu-item');
    }
}
