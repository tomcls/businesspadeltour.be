<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class Photos extends Component
{
    public $showEditModal = false;
    public $tab = 'toursandtaxi'; // liege

    public function mount(Request $request, $slug = null)
    {
        $this->tab = $slug?? 'toursandtaxi';
    }
    public function render()
    {
        return view('livewire.photos')->layout('components.layouts.base');
    }
}
