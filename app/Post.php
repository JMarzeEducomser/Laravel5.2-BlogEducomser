<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;
// Eliminación lógica (1)
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    // Eliminación lógica (2)
    use SoftDeletes;

    protected $table = 'posts';

    protected $fillable = ['codigo', 'titulo', 'contenido', 'publicado', 'categoria_id'];

    // Cambiamos el key
    protected $primaryKey = 'codigo';
    public $incrementing = false;

    // Relationships
    // 1->N (1)
    public function categoria(){
        return $this->belongsTo('Blog\Categoria');
    }

    // N->N
    public function tags(){
        return $this->belongsToMany('Blog\Tag', 'post_tag', 'post_codigo', 'tag_id');
    }
}
