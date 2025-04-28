<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    protected $fillable = [
        'cod_assignment',
        'id_user_logged',
        'user_id',
        'branch_id',
        'state'
    ];


}
