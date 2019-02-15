<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    public $table = 'Tipo';
    protected $fillable = ['id', 'id_ciudad', 'nombre', 'plazas'];
}
