<?php 

namespace App\Helpers;

use Illuminate\Support\Facades\Http;

trait ApiRequests {

    //MUESTRA TODOS LOS PAQUETES DISPONIBLES
    static public function getPaquetes(){

        $url = env('API_URL') . '/agenda/paquetes';
    
        return ApiRequests::get($url);

    }

    //BUSCA UN PAQUETE POR ID
    static public function getPaquete($id){

        $url = env('API_URL') . '/agenda/paquete/' . $id;
    
        return ApiRequests::get($url);

    }

    //MUESTRA TODOS LOS HORARIOS SIN BLOQUEO
    static public function getHorarios(){

        $url = env('API_URL') . '/agenda/horarios';

        return ApiRequests::get($url);

    }

    //BUSCA UN HORARIO POR ID
    static public function getHorario($id){

        $url = env('API_URL') . '/agenda/horario/' . $id;

        return ApiRequests::get($url);

    }

    //VALIDA QUE LA CITA TENGA DISPONIBILIDAD
    static public function validarCita($data){

        $url = env('API_URL') . '/agenda/validar';

        return ApiRequests::post($url, $data);
        
    }

    //REGISTRA UNA CITA
    static public function storeReserva($data){

        $url = env('API_URL') . '/agenda/reservar';

        return ApiRequests::post($url, $data);

    }

    //GET GLOBAL
    static private function get($url){

        $response = Http::withHeaders([
            'Authorization' => env('API_SECRET'),
            'Cedula' => env('API_ID'),
            'Accept' => 'application/json'
        ])->get($url);
    
        return $response->json();

    }

    //POST GLOBAL
    static private function post($url, $data){

        $response = Http::withHeaders([
            'Authorization' => env('API_SECRET'),
            'Cedula' => env('API_ID'),
            'Accept' => 'application/json'
        ])->post($url, $data);
    
        return $response->json();
    
    }

}