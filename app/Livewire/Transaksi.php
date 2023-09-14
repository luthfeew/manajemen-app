<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Transaksi')]
class Transaksi extends Component
{
    public function render()
    {
        return view('livewire.transaksi');
    }
}
