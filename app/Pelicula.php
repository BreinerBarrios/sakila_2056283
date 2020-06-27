<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    protected $table="film";
    protected $primaryKey = "film_id";
    public $timestamps = false;

    // metodo para encontrar las categoria a la que pertenece la pelicula 
    public function categorias(){
        return $this->belongsToMany('App\Categoria' ,
                                     'film_category' , 
                                     'film_id' ,
                                    'category_id' );
    }

    public function actores(){
        return $this->belongsToMany('App\Actor' ,
                                    'film_actor',
                                    'actor_id',
                                    'film_id');
    }



    public function idioma(){
            // Retornamos el inverso de la relacion: muchos a 1
            return $this->belongsTo("App\Idioma", "language_id");

    }

}
