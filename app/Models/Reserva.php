<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $table = 'reservas';
    protected $primaryKey = 'id_reserva';
    public $timestamps = false;

    protected $fillable = [
        'id_reserva',
        'id_evento',
        'id_comprador',
        'nro_boletas',
    ];
}
