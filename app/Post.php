<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;
// Eliminación lógica (1)
use Illuminate\Database\Eloquent\SoftDeletes;

// Carbon
use Carbon\Carbon;

class Post extends Model
{
    // Eliminación lógica (2)
    use SoftDeletes;

    protected $table = 'posts';

    protected $fillable = ['codigo', 'titulo', 'contenido', 'publicado', 'categoria_id', 'imagen'];

    // Cambiamos el key
    protected $primaryKey = 'codigo';
    public $incrementing = false;

    // Scope
    // public function scopeNombre(){}
    public function scopeLikePost($query, $criterio){
        return $query
            ->where('codigo', 'LIKE', "%$criterio%")
            ->orWhere('titulo', 'LIKE', "%$criterio%");
    }

    // Mutators
    //public function getAttribute(){}
    public function setImagenAttribute($imagen){
        $nuevoNombre =
            Carbon::now()->year . Carbon::now()->month . Carbon::now()->day
            . "-" .
            Carbon::now()->hour . Carbon::now()->minute . Carbon::now()->second . "." .
            $imagen->getClientOriginalExtension();

        $this->attributes['imagen'] = $nuevoNombre;

        \Storage::disk('local')->put($nuevoNombre, \File::get($imagen));
    }

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
