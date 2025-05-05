<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Console\View\Components\Task;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TechnicalAssignment extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'id_assignments',
        'id_technical',
        'state',
    ];

    public function assignment()
    {
        return $this->belongsTo(Assignment::class, 'id_assignments');
    }

    public function tecnico()
    {
        return $this->belongsTo(User::class, 'id_technical');
    }

    public function tareas()
    {
        return $this->hasMany(Task::class, 'id_technical_assignment');
    }
}
