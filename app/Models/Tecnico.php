<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tecnico extends Model
{
    protected $table = 'tecnico';
    protected $primaryKey = 'ID_tec';
    public $timestamps = false;
    protected $fillable = ['nombre', 'apellido', 'tel_tecnico', 'usuario_fk'];

    public function usuario() {
        return $this->belongsTo(Usuario::class, 'usuario_fk', 'ID_usuario');
    }
}
