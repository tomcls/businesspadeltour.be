<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Storage;

class SessionPhotos extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    protected $fillable = [
        'name',
        'session_id',
        'sort',
        'origin',
    ];

    public function session () {
        return $this->belongsTo(Session::class);
    }
    public function path($size='large')
    {
        return Storage::disk('sessionImages')->path($this->session_id.'/'.$size.'_'.$this->name);
    }
    public function url($size='large')
    {
        return Storage::disk('sessionImages')->url($this->session_id.'/'.$size.'_'.$this->name);
    }
}
