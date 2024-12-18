<?php

namespace App\Http\Livewire\Admin;

use App\Models\Event;
use App\Models\Invoice;
use App\Models\Session;
use App\Models\Team;
use App\Traits\DataTable\WithBulkActions;
use App\Traits\DataTable\WithCachedRows;
use App\Traits\DataTable\WithPerPagePagination;
use App\Traits\DataTable\WithSorting;
use Livewire\Component;

class Invoices extends Component
{
    use WithPerPagePagination, WithSorting, WithBulkActions, WithCachedRows;
    public $showDeleteModal = false;
    public $deleteSelected;
    public $showModal = false;
    public $detail;
    public $events = [];
    public $sessions = [];
    public $prices = [];
    public $teams;

    public $filters = [
        'id' => null,
        'firstname' => null,
        'lastname' => null,
        'email' => null,
        'event_id' => null,
        'session_id' => null,
        'price' => null,
    ];
    public function mount() {
        $this->sessions = Session::whereVisible(true)->orderBy('startdate','desc')->get();
        $this->events = Event::orderBy('date','desc')->get();
        $this->prices = Invoice::orderBy('price','desc')->get()->unique('price');
    }
    public function getRowsQueryProperty()
    {
        $query = Invoice::query()
        ->when($this->filters['event_id'], fn ($query, $id) =>
                $query->WhereHas('eventUser',  fn ($subquery) =>
                    $subquery->where('event_id', '=',$id)))
        ->when($this->filters['session_id'], fn ($query, $id) =>
                $query->WhereHas('team',  fn ($subquery) =>
                        $subquery->where('session_id', '=',$id)))
         ->when($this->filters['firstname'], fn ($query, $id) =>
                $query->WhereHas('user',  fn ($subquery) =>
                        $subquery->where('firstname', 'like','%'.$id.'%')))
        ->when($this->filters['lastname'], fn ($query, $id) =>
                $query->WhereHas('user',  fn ($subquery) =>
                        $subquery->where('lastname', 'like','%'.$id.'%')))
        ->when($this->filters['email'], fn ($query, $id) =>
                $query->WhereHas('user',  fn ($subquery) =>
                        $subquery->where('email', 'like','%'.$id.'%')))
        ->when($this->filters['price'], fn ($query, $id) => $query->where('price', $id));
        return $this->applySorting($query);
    }
    public function showModal($id) {
        $this->showDeleteModal = true;
        $this->deleteSelected = $id;
    }
    public function show($row) {
        $this->showModal = true;
        $this->detail = Invoice::whereId($row['id'])->first();
        if($this->detail->team_id) {
            $this->teams = Team::whereInvoiceId($this->detail->id)->get();
        }
    }
    public function delete() {
        Invoice::whereId($this->deleteSelected)->delete();
        $this->deleteSelected = null;
        $this->showDeleteModal = false;
    }
    public function getRowsProperty()
    {
        return $this->cache(function () {
            return $this->applyPagination($this->rowsQuery);
        });
    }
    public function render()
    {
        return view('livewire.admin.invoices', [
            'rows' => $this->rows
        ])->layout('layouts.admin');
    }
}
