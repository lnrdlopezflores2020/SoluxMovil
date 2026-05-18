<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'cliente';
    protected $primaryKey = 'ID_client';
    public $timestamps = false;

    protected $fillable = [
        'nombre', 'apellido', 'telefono', 'direccion', 'num_ext', 'num_int', 'usuario_fk'
    ];

    public function usuario() {
        return $this->belongsTo(Usuario::class, 'usuario_fk', 'ID_usuario');
    }

    public function dispositivos() {
        return $this->hasMany(Dispositivo::class, 'id_client_fk', 'ID_client');
    }
}
