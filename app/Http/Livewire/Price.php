<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Price extends Component
{
    public function mount() {
        
    }
    public function render()
    {
        return view('livewire.price')->layout('layouts.base');
    }
}
