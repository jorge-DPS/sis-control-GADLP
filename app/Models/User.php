<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Models\Admin\Assignment;
use App\Models\Admin\TechnicalAssignment;
use App\Models\Admin\UserType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'last_name',
        'email',
        'password',
        'user_type_id', // aqui en automatico
        'phone',
        'identity_card',
        'photo',
        'state',
        'cod_user'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function userType()
    {
        return $this->belongsTo(UserType::class, 'user_type_id'); // Relación N:1
    }


    // Relaciones
    public function asignacionesAdministradas()
    {
        return $this->hasMany(Assignment::class, 'id_admin');
    }

    public function asignacionesTecnico()
    {
        return $this->hasMany(TechnicalAssignment::class, 'id_technical');
    }

}
