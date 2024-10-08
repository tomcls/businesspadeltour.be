<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class ChargeSuccess extends Component
{
    public function mount(Request $request) {
        logger($request);
    }
    public function render()
    {
        return view('livewire.charge-success')->layout('layouts.base');
    }
}
