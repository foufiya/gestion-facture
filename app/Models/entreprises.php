<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class entreprises extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_name',
        'company_tel',
        'company_email',
        'company_address',
        'company_CompteBancaire'
    ];
}
