<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'intent', 'invoice_num', 'date_payed'
    ];
    protected $appends = ['date_payed_for_editing'];

    protected $casts = [
        'date_payed' => 'datetime'
    ];

    protected $with = ['user'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function eventUser(): BelongsTo
    {
        return $this->belongsTo(EventUser::class, 'event_user_id');
    }
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class, 'team_id');
    }
    public function getDatePayedForEditingAttribute()
    {
        return $this->date_payed ? $this->date_payed->format('d-m-Y') : null;
    }
    public function setDatePayedForEditingAttribute($value)
    {
        $this->date_payed = Carbon::parse($value);
    }

    public function getDatePayedForHumansAttribute()
    {
        return $this->date_payed ? $this->date_payed->format('d-m-Y') : null;
    }
    public function getDateCreatedForHumansAttribute()
    {
        return $this->created_at->format('d-m-Y h:i:s');
    }
    public static function newInvoiceNumber()
    {
        $invoice = new Invoice();
        $invoiceNum = null;
        $year = null;
        $latest  = $invoice->latest()->first();
        if ($latest) {
            $a = explode('-', $latest->invoice_num);
            $year = $a[0];
            $invoiceNum = $a[1]??0;
        }
        $currentYear = date('Y');
        if ($year == $currentYear) {
            $invoiceNum += 1;
        } else {
            $invoiceNum = str_pad('1', 6, '0', STR_PAD_LEFT);
        }
        return $currentYear . '-' . $invoiceNum;
    }
}
