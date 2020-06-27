<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{ 
    protected $table="customer";
    protected $primaryKey = "curtomer_id";
    public $timestamps = false;
    
    
}
