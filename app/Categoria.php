<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    // Nombre de la tabla
    protected $table = 'categorias';

    // Campos para el llenado masivo
    protected $fillable = ['nombre'];

    // No timestamps
    public $timestamps = false;
}
