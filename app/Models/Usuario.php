<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';
    protected $primaryKey = 'ID_usuario';
    public $timestamps = false; // La tabla no tiene created_at/updated_at

    protected $fillable = [
        'emai', 'rol_usuario', 'contrasenia', 'codigo_2fa', 'expiracion_2fa'
    ];

    protected $hidden = ['contrasenia'];

    // Relaciones 1:1 (basadas en UNIQUE KEY usuario_fk)
    public function administrador() {
        return $this->hasOne(Administrador::class, 'usuario_fk', 'ID_usuario');
    }

    public function tecnico() {
        return $this->hasOne(Tecnico::class, 'usuario_fk', 'ID_usuario');
    }

    public function cliente() {
        return $this->hasOne(Cliente::class, 'usuario_fk', 'ID_usuario');
    }
}
