<?php

namespace App\Models\Technical;

use App\Models\Admin\TechnicalAssignment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_technical_assignment',
        'descripcion',
        'state',
        'observaciones',
    ];

    public function asignacionTecnico()
    {
        return $this->belongsTo(TechnicalAssignment::class, 'id_asignacion_tecnico');
    }
}
