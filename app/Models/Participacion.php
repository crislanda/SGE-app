<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participacion extends Model
{
    protected $fillable = [
        'evento_id',
        'organizador_id',
        'rol',
    ];
    use HasFactory;
}
