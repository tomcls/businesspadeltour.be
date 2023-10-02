<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Video extends Component
{
   
    public function mount() {
      
    }
    public function render()
    {
        return view('livewire.video')->layout('components.layouts.base');
    }
}
