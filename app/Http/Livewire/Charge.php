<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Charge extends Component
{
    public $user;

    public function mount() {

    }
    public function render()
    {
        return view('livewire.charge')->layout('layouts.base');
    }
}
