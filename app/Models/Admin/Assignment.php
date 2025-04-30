<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    protected $fillable = [
        'cod_assignment',
        'id_user_logged',
        'id_admin',
        'id_branch',
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
        return $this->hasMany(TechnicalAssignment::class, 'id_asignacion');
    }

}
