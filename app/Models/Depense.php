<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depense extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero',
        'date',
        'montant',
        'etat',
        'date_paiement',
        'description',
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

    /**
     * Get the formatted date_paiement attribute.
     *
     * @param  string  $value
     * @return string
     */
    public function getDatePaiementAttribute($value)
    {
        return $value ? date('Y-m-d', strtotime($value)) : null;
    }
}
