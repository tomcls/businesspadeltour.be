<?php

namespace App\Http\Livewire;

use App\Models\Company;
use App\Models\Invoice;
use App\Models\Logo;
use App\Models\User;
use App\Traits\DataTable\WithBulkActions;
use App\Traits\DataTable\WithCachedRows;
use App\Traits\DataTable\WithPerPagePagination;
use App\Traits\DataTable\WithSorting;
use Exception;
use Livewire\Component;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Livewire\WithFileUploads;

class Upload extends Component
{
    use  WithPerPagePagination, WithSorting, WithBulkActions, WithCachedRows, WithFileUploads;
    public $upload;
    protected $listeners = ['upload'];
    public $company_id;
    public $company;
    public $user;
    public $invoice;

    public function mount(Request $request) {
        if ($request['iid']) {
            $this->invoice = Invoice::whereId($request['iid'])->first();
            $this->user = User::whereId($this->invoice->user_id)->first();
            $this->company = Company::whereId($this->user->company_id)->first();
        }
    }

    public  function upload()
    {
        if ($this->upload) {
           
            $destPathLogo = storage_path('app/logos');
            logger($destPathLogo);
            $this->notify(['message' => 'Start processing documents(s)... please wait', 'type' => 'alert']);
            try {
                File::makeDirectory($destPathLogo, 0777, false, false);
            } catch (Exception $e) {
            }

            $destinationPath = storage_path('app/logos') . '/' . $this->company->id;
            try {
                File::makeDirectory($destinationPath, 0777, false, false);
            } catch (Exception $e) {
            }
            
            $this->notify(['message' => 'Start processing image(s)... please wait', 'type' => 'alert']);
            logger('logos/' . $this->company->id);
            logger($this->upload->getClientOriginalName());
            $this->upload->storeAs('logos/' . $this->company->id, $this->upload->getClientOriginalName());

            Logo::create([
                'company_id' => $this->company->id,
                'name' => $this->upload->getClientOriginalName(),
            ]);
            $this->notify(['message' => 'Logo well uploaded', 'type' => 'success']);
            
        }
    }
    public function getRowsQueryProperty()
    {
        $query = Logo::whereCompanyId($this->company->id);

        return $this->applySorting($query);
    }

    public function getRowsProperty()
    {
        //return $this->applyPagination($this->rowsQuery);
        return $this->cache(function () {
            return $this->applyPagination($this->rowsQuery);
        });
    }
    public function tempUrl() {
        try {
            $this->upload->temporaryUrl();
        } catch (\Throwable $th) {
            return null;
        }
    }
    public function render()
    {
        return view('livewire.upload', [
            'rows' => $this->rows
        ])->layout('layouts.base');
    }
}
