<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesTax extends Model
{
    use HasFactory;

    protected $fillable = [
        'tax_payer_id',
        'tax_month',
        'nationality',
        'address',
    ];

    public function tax_payer(){
        return $this->belongsTo(TaxPayer::class);
    }
}
