<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class Photos2024 extends Component
{
    public $showEditModal = false;
    public $tab = 'liege'; // liege
    //public $queryString = ['slug'];
    public $slug = 'liege';

    public function mount(Request $request, $slug = null)
    {
        $this->tab = $slug ?? 'liege';
        $this->slug = $slug ?? 'liege';
        logger('tab ='.$this->tab);
    }
    public function render()
    {
        return view('livewire.photos2024')->layout('components.layouts.base');
    }
}
