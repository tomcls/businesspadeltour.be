<?php

namespace App\Http\Livewire\Admin;

use App\Models\EventUser;
use App\Traits\DataTable\WithBulkActions;
use App\Traits\DataTable\WithCachedRows;
use App\Traits\DataTable\WithPerPagePagination;
use App\Traits\DataTable\WithSorting;
use Livewire\Component;

class UserEvents extends Component
{
    use WithPerPagePagination, WithSorting, WithBulkActions, WithCachedRows;
    public $showDeleteModal = false;
    public $deleteSelected;
    public function mount() {

    }
    public function getRowsQueryProperty()
    {
        // $query = Team::whereCompanyId(auth()->user()->company_id);
        $query = EventUser::query();
        return $this->applySorting($query);
    }
    public function showModal($id) {
        $this->showDeleteModal = true;
        $this->deleteSelected = $id;
    }
    public function delete() {
        EventUser::whereId($this->deleteSelected)->delete();
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
        return view('livewire.admin.user-events', [
            'rows' => $this->rows
        ])->layout('layouts.admin');
    }
}
