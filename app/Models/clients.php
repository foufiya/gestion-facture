<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clients extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_client',
        'clientprenom',
        'clientemail',
        'clientaddress',
        'clienttel',
        'client_CompteBancaire'
    ];
}
