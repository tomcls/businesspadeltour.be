<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Team extends Component
{
    public $firstname;
    public $lastname;
    public $email;
    public $size;
    public $session;
    public $teamNumber;
    public $sessions;
    public $category;

    protected $listeners = [];

    public function mount($teamNumber, $sessions) {
        $this->teamNumber = $teamNumber;
        $this->sessions = $sessions;
    }

    public function setSession($id)
    {
        $this->session = $id;
    }

    public function setCategory($name = "fun")
    {
        $this->category = $name;
    }

    public function render()
    {
        return view('livewire.team');
    }
}
