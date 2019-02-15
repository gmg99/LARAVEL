<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    public $table = 'Evento';
    protected $fillable = ['id', 'hora', 'fecha', 'descripcion','id_tipo'];
}
