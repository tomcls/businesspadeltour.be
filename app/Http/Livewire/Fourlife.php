<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Fourlife extends Component
{

    public $eventId = 6;
  
    public function render()
    {
        return view('livewire.fourlife')->layout('layouts.base');
    }
}
