<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    protected $table = 'administrador';
    protected $primaryKey = 'Id_admin';
    public $timestamps = false;
    protected $fillable = ['nombre', 'apellido', 'usuario_fk'];

    public function usuario() {
        return $this->belongsTo(Usuario::class, 'usuario_fk', 'ID_usuario');
    }
}
