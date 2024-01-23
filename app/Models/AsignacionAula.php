<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsignacionAula extends Model
{
    use HasFactory;
    protected $fillable = ['asignacion_id', 'aula_id'];

    public function asignacion_previas()
    {
        return $this->belongsTo(AsignacionPrevia::class, 'asignacion_id');
    }
    public function aulas()
    {
        return $this->belongsTo(Aula::class, 'aula_id');
    }
}
