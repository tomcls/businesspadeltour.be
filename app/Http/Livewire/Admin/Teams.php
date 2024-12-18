<?php

namespace App\Http\Livewire\Admin;

use App\Models\Session;
use App\Models\Team;
use App\Traits\DataTable\WithBulkActions;
use App\Traits\DataTable\WithCachedRows;
use App\Traits\DataTable\WithPerPagePagination;
use App\Traits\DataTable\WithSorting;
use Livewire\Component;
use Livewire\WithFileUploads;

class Teams extends Component
{
    use WithPerPagePagination, WithSorting, WithBulkActions, WithCachedRows, WithFileUploads;
    public $showDeleteModal = false;
    public $deleteSelected; 
    public $sessions = [];
    public $filters = [
        'id' => null,
        'firstname' => null,
        'lastname' => null,
        'email' => null,
        'session_id' => null,
    ];

    public function mount() {
        $this->sessions = Session::whereVisible(true)->orderBy('startdate','desc')->get();
    }
    public function updatedFilters()
    {
        $this->resetPage();
    }
    public function getRowsQueryProperty()
    {
        // $query = Team::whereCompanyId(auth()->user()->company_id);
        $query = Team::query()
        ->when($this->filters['session_id'], fn ($query, $id) => $query->where('session_id', $id))
        ->when($this->filters['firstname'], fn ($query, $fn) =>
        $query->where(function ($sq) use($fn) {
            $sq->orWhereHas('playerOne',  fn  ($subquery) =>
                $subquery->where('firstname', 'like','%'.$fn.'%'))
                ->orWhereHas('playerTwo',  fn  ($subquery) =>
                $subquery->where('firstname', 'like','%'.$fn.'%'));
        
        }))
        ->when($this->filters['lastname'], fn ($query, $fn) =>
            $query->where(function ($sq) use($fn) {
                $sq->orWhereHas('playerOne',  fn  ($subquery) =>
                    $subquery->where('lastname', 'like','%'.$fn.'%'))
                    ->orWhereHas('playerTwo',  fn  ($subquery) =>
                    $subquery->where('lastname', 'like','%'.$fn.'%'));
            
            }))
            ->when($this->filters['email'], fn ($query, $fn) =>
            $query->where(function ($sq) use($fn) {
                $sq->orWhereHas('playerOne',  fn  ($subquery) =>
                    $subquery->where('email', 'like','%'.$fn.'%'))
                    ->orWhereHas('playerTwo',  fn  ($subquery) =>
                    $subquery->where('email', 'like','%'.$fn.'%'));
            
            }));
        
        return $this->applySorting($query);
    }

    public function showModal($id) {
        $this->showDeleteModal = true;
        $this->deleteSelected = $id;
    }
    public function delete() {
        Team::whereId($this->deleteSelected)->delete();
        $this->deleteSelected = null;
        $this->showDeleteModal = false;
    }
    public function getRowsProperty()
    {
        //return $this->applyPagination($this->rowsQuery);
        return $this->cache(function () {
            return $this->applyPagination($this->rowsQuery);
        });
    }
    public function render()
    {
        return view('livewire.admin.teams', [
            'rows' => $this->rows
        ])->layout('layouts.admin');
    }
}
