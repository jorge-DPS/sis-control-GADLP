<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Assignment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id_branch',
        'id_admin',
        'fecha_asignacion',
        'state',
        'description_problem',

    ];

    public function lugar()
    {
        return $this->belongsTo(Branch::class, 'id_branch');
    }

    public function administrador()
    {
        return $this->belongsTo(User::class, 'id_admin');
    }

    public function tecnicosAsignados()
    {
        return $this->hasMany(TechnicalAssignment::class, 'id_assignments');
    }

}
