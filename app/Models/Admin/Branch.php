<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Branch extends Model
{
    use HasFactory, SoftDeletes;

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
