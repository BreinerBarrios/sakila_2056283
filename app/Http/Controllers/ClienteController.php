<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Customer;
use App\Address;

class ClienteController extends Controller
{
    // accion get para mostrar formulario de nuevo cliente
    public function create(){
        //traer paises 
        $paises = Country::all();

        return view('clientes.new')
        ->with("paises" , $paises);
    }
    public function store(Request $r){

        // 1. crear una direccion 
        $d = new Address();
        //campti de testo de direccion  
        $d->address = $r->input("direccion_cliente");
        // el id de la ciudad como clave foranea en address
        $d->city_id = $r->input("ciudad_cliente");
        // guardar la direccion 
        $d->save();
        // comprobar la direccion 

        // 2. crear el cliente 
        $c = new Customer();
        $c->first_name = $r->input("nombre_cliente");
        $c->last_name = $r->input("apellido_cliente");
        $c->email = $r->input("email_cliente");
        // clave foranea de la store(store_id) queda fija a 1
        // $c->store_id = 1;
        // vincular cliente a direccion creada
        $c->address_id = $d->address_id;
        // verificar si llega el activo 
        if($r->input("activo_cliente") == null ){
            $c->active = 0;
        }else{
            $c->active = 1;
        }
        $c->save();

        echo("Usuario registrado con id: $c->customer_id");
    }
}
