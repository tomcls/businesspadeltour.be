<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayerSession extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    public function playerOne(){
        return $this->belongsTo(User::class, 'player_one');
    }
    public function playerTwo(){
        return $this->belongsTo(User::class, 'player_two');
    }

    public function session(){
        return $this->belongsTo(Session::class, 'session_id');
    }
}
