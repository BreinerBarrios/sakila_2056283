<?php

namespace App\Http\Controllers;
use App\Country;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function jsoncities($id_pais){
       return $cities = Country::find($id_pais)->cities()->get()->tojson();
    
    }

}
