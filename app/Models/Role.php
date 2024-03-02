<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description'];

    public function permissions()
    {
        $this->hasMany(Permission::class, "role_id");
    }
    public function users()
    {
        $this->hasMany(User::class, "role_id");
    }
}
