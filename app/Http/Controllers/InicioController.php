<?php

namespace App\Http\Controllers;

use App\Helpers\ApiRequests;

class InicioController extends Controller{

    public function index(){

        $paquetes = ApiRequests::getPaquetes();

        return view('index', ['paquetes' => $paquetes]);    

    }

}