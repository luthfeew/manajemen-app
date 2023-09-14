<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Area')]
class Area extends Component
{
    public function render()
    {
        return view('livewire.area');
    }
}
