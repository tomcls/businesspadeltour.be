<?php

namespace App\Http\Livewire;

use App\Models\Team as ModelsTeam;
use Livewire\Component;

class Team extends Component
{
    public $sessions;

    public $team;

    protected function rules(){
        return [
            'team.session' => 'required',
            'team.category' => 'required',
            'team.number' => 'required',
            'team.playerOneFirstname' => 'required',
            'team.playerOneLastname' => 'required',
            'team.playerOneEmail' => 'required|email',
            'team.playerOneSize' => 'required',
            'team.playerTwoFirstname' => 'required',
            'team.playerTwoLastname' => 'required',
            'team.playerTwoEmail' => 'required|email',
            'team.playerTwoSize' => 'required',
        ];
    }

    protected $listeners = ['onValidateTeam'];

    public function mount($teamNumber, $sessions) {
        $this->team['number'] = $teamNumber;
        $this->sessions = $sessions;
    }

    public function setSession($id)
    {
        $this->team['session'] = $id;
    }

    public function setCategory($name = "fun")
    {
        $this->team['category'] = $name;
    }

    public function onValidateTeam() {
       $this->validate();
       $this->emit('onTeamValidated', $this->team);
    }

    public function render()
    {
        return view('livewire.team');
    }
}
