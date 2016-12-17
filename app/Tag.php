<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    // Nombre de la tabla
    protected $table = 'tags';

    // Campos para el llenado masivo
    protected $fillable = ['nombre'];

    // No timestamps
    public $timestamps = false;

    // Relationships
    // N->N
    public function posts(){
        return $this->belongsToMany('Blog\Post', 'post_tag', 'tag_id', 'post_codigo');
    }
}
