<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizador extends Model
{
    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'teléfono',
    ];
    public function eventos()
    {
        return $this->hasManyThrough('App\Models\Evento', 'App\Models\Participacion', 'organizador_id', 'id', 'id', 'evento_id');
    }
    use HasFactory;
}
