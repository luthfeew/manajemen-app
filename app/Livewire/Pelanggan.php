<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Pelanggan')]
class Pelanggan extends Component
{
    public function render()
    {
        return view('livewire.pelanggan');
    }
}
