<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'date',
        'amount',
        'vat',
        'description',
        'invoice_number'
    ];

    /**
     * Get the formatted date attribute.
     *
     * @param  string  $value
     * @return string
     */
    public function getDateAttribute($value)
    {
        return date('Y-m-d', strtotime($value));
    }
}
