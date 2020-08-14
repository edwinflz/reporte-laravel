<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PerfilVendedor extends Model
{
    protected $table = 'perfil_vendedores';

    protected $fillable = ['descripcion', 'foto', 'cities_id', 'estado_id', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function city()
    {
        return $this->belongsTo('App\Citie', 'cities_id');
    }

    public function estado()
    {
        return $this->belongsTo(EstadoPerfil::class, 'estado_id');
    }

    public function productos()
    {
        return $this->hasMany(Producto::class, 'perfil_id');
    }

}
