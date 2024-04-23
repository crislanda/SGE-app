<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'descripción',
        'fecha_inicio',
        'fecha_fin',
        'ubicación',
    ];
public function organizadores()
{
    return $this->hasManyThrough('App\Models\Organizador', 'App\Models\Participacion', 'evento_id', 'id', 'id', 'organizador_id');
}
}
