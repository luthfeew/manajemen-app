<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Paket')]
class Paket extends Component
{
    public function render()
    {
        return view('livewire.paket');
    }
}
