<?php

namespace App\Http\Livewire\Admin;

use App\Models\Company;
use App\Traits\DataTable\WithBulkActions;
use App\Traits\DataTable\WithCachedRows;
use App\Traits\DataTable\WithPerPagePagination;
use App\Traits\DataTable\WithSorting;
use Livewire\Component;
use Livewire\WithFileUploads;

class Companies extends Component
{
    use WithPerPagePagination, WithSorting, WithBulkActions, WithCachedRows, WithFileUploads;
    
    public function mount() {

    }
    public function getRowsQueryProperty()
    {
        // $query = Team::whereCompanyId(auth()->user()->company_id);
        $query = Company::query();
        return $this->applySorting($query);
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
        return view('livewire.admin.companies', [
            'rows' => $this->rows
        ])->layout('layouts.admin');
    }
}
