<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    
        protected $table="language";
        protected $primaryKey = "language_id";
        public $timestamps = false;
    
        // metodo para encontrar las categoria a la que pertenece la pelicula 
        public function peliculas(){
            return $this->hasMany("App\Pelicula" , "language_id");
                                         
        }
    
    
}
