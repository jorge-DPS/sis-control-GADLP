<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'state',
        'sigla',
    ];

    public function asignaciones()
    {
        return $this->hasMany(Assignment::class, 'id_branch');
    }
}
