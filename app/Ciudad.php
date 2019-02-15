<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    public $table = 'Ciudad';
    protected $fillable = ['id', 'nombre', 'semana_habil', 'limitacion_visualizacion',
        'hora_inicio','hora_fin','duracion_evento'];
}
