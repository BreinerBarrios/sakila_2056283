<?php

namespace App\Http\Controllers;
use App\Pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    //accion para mostrar el catalogo de pelicula
    public function index(){
        // Seleccionar todas las eliculas 
        $peliculas = Pelicula::paginate(5);
        // enviarlas a la vista 
        return view('peliculas.index')->with("peliculas" , $peliculas);
    }

}
