<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Akun')]
class Akun extends Component
{
    public function render()
    {
        return view('livewire.akun');
    }
}
