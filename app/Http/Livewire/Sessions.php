<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Sessions extends Component
{
    public $showEditModal = false;
    public $tab = 'liege'; // liege

    public function render()
    {
        return view('livewire.sessions');
    }
}
