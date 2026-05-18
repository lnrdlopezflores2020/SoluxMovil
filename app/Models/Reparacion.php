<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reparacion extends Model
{
    protected $table = 'reparacion';
    protected $primaryKey = 'ID_rep';
    public $timestamps = true; // Definidos en tu SQL

    protected $fillable = [
        'descripcion', 'fec_inicio', 'fec_est_entrega', 
        'est_reparacion', 'id_tel_fk', 'costo'
    ];

    public function dispositivo() {
        return $this->belongsTo(Dispositivo::class, 'id_tel_fk', 'ID_tel');
    }
}
