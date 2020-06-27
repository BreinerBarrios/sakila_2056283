<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //atributos correspondientes a la tabla 
    protected $table = "category";
    protected $primaryKey = "category_id";
    public $timestamps = false;

    //  metodo que relacione la categoria con las Peliculas

    public function peliculas(){

        // la categoria se relaciona con muchas peliculas
        // la pelicula pertenecera a muchas categorias (M...M)
        return $this->belongsToMany('App\Pelicula' , 'film_category' , 'category_id' , 'film_id' );

    }    


    
   
}
