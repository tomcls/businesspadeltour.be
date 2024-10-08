<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Storage;
class Logo extends Model
{
    use HasFactory;

    protected $fillable = ['name','company_id','created_at','updated_at'];

    public function path()
    {
        return Storage::disk('logos')->path($this->company_id.'/'.$this->name);
    }
    public function url()
    {
        return Storage::disk('logos')->url($this->company_id.'/'.$this->name);
    }
}
