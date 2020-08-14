<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'celular', 'provider', 'provider_id',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function perfilvendedor()
    {
        return $this->hasOne('App\Models\PerfilVendedor', 'user_id');
    }

    public function scopeName($query, $name)
    {
        if ($name) {
            return $query->where('name', 'LIKE', "%$name%");
        }

    }

    public function scopeCreatedAt($query, $fecha)
    {
        if ($fecha) {
            return $query->whereDate('created_at', $fecha);
        }

    }

}
