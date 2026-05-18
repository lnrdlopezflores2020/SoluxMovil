<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispositivo extends Model
{
    protected $table = 'dispositivo';
    protected $primaryKey = 'ID_tel';
    public $timestamps = false;

    protected $fillable = ['tipo', 'marca', 'modelo', 'id_client_fk'];

    public function cliente() {
        return $this->belongsTo(Cliente::class, 'id_client_fk', 'ID_client');
    }

    public function reparaciones() {
        return $this->hasMany(Reparacion::class, 'id_tel_fk', 'ID_tel');
    }
}
