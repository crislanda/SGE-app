<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participacion extends Model
{
    protected $table = 'participaciones';
    public $timestamps = false;

    protected $fillable = [
        'evento_id',
        'organizador_id',
        'rol',
    ];
    use HasFactory;

    public function evento()
    {
        return $this->belongsTo(Evento::class);
    }

    public function organizador()
    {
        return $this->belongsTo(Organizador::class);
    }
}
