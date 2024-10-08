<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Team extends Model
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
    public function company():BelongsTo {
        return $this->belongsTo(Company::class,'company_id');
    }
}
