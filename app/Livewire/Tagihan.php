<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Tagihan')]
class Tagihan extends Component
{
    public function render()
    {
        return view('livewire.tagihan');
    }
}
