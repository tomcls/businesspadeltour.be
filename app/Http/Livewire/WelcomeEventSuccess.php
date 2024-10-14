<?php

namespace App\Http\Livewire;

use Livewire\Component;

class WelcomeEventSuccess extends Component
{
    public function render()
    {
        return view('livewire.welcome-event-success')->layout('layouts.base');;
    }
}
