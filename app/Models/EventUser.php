<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EventUser extends Model
{
    use HasFactory;
    public function event():BelongsTo {
        return $this->belongsTo(Event::class,'event_id');
    }
    
    public function user():BelongsTo {
        return $this->belongsTo(User::class,'user_id');
    }

    public function invoice():BelongsTo {
        return $this->belongsTo(Invoice::class,'invoice_id');
    }
}
