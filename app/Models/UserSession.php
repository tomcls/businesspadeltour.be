<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSession extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function session(){
        return $this->belongsTo(Session::class, 'session_id');
    }
}
