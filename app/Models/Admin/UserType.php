<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    use HasFactory;

    protected $table = 'user_types';

    protected $fillable = [
        'type_user',
        'description',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'user_type_id'); // Relación 1:N
    }
}
