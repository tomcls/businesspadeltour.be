<?php

namespace App\Http\Livewire\Me;

use App\Models\Logo as ModelsLogo;
use App\Traits\DataTable\WithBulkActions;
use App\Traits\DataTable\WithCachedRows;
use App\Traits\DataTable\WithPerPagePagination;
use App\Traits\DataTable\WithSorting;
use Exception;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use File;

class Logo extends Component
{
    use WithPerPagePagination, WithSorting, WithBulkActions, WithCachedRows, WithFileUploads;
    public $upload;
    protected $listeners = ['upload'];
    public function mount() {}
    public  function upload()
    {
        logger('upload');
        logger($this->upload);
        if ($this->upload) {
            $destPathLogo = storage_path('app/logos');
            $this->notify(['message' => 'Start processing documents(s)... please wait', 'type' => 'alert']);
            try {
                File::makeDirectory($destPathLogo, 0777, false, false);
            } catch (Exception $e) {
            }

            $destinationPath = storage_path('app/logos') . '/' . auth()->user()->company_id;
            try {
                File::makeDirectory($destinationPath, 0777, false, false);
            } catch (Exception $e) {
            }
            
            
            $this->notify(['message' => 'Start processing image(s)... please wait', 'type' => 'alert']);
      
            $this->upload->storeAs('logos/' . auth()->user()->company_id, $this->upload->getClientOriginalName());

            ModelsLogo::create([
                'company_id' => auth()->user()->company_id,
                'name' => $this->upload->getClientOriginalName(),
            ]);
            $this->notify(['message' => 'Logo well uploaded', 'type' => 'success']);
        }
    }
    public function getRowsQueryProperty()
    {
        $query = ModelsLogo::whereCompanyId(auth()->user()->company_id);

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
        return view('livewire.me.logo', [
            'rows' => $this->rows
        ])->layout('layouts.me');
    }
}
