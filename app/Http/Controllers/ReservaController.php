<?php

namespace App\Http\Controllers;

use App\Helpers\ApiRequests;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ReservaController extends Controller{
    
    public function create(){

        $paquetes = ApiRequests::getPaquetes();
        $horarios = ApiRequests::getHorarios();
        
        return view('reservar', [
            'paquetes' => $paquetes,
            'horarios' => $horarios
        ]);    

    }

    public function store(Request $request){

        //VALIDAR INPUTS
        $request->validate([
            'fecha' => ['required', 'date_format:Y-m-d'],
            'cedula' => ['required', 'max:20'],
            'nombre' => ['required', 'max:100'],
            'telefono' => ['required', 'string', 'max:20'],
            'correo' => ['required', 'email:rfc,dns', 'max:100'],
            'paquete' => ['required']
        ]);

        //VALIDAR EL PAQUETE
        $paquete = ApiRequests::getPaquete($request->paquete);

        if(!isset($paquete['idpaq'])){
            throw ValidationException::withMessages(['paquete' => 'El paquete no es válido.']);
        }

        //VALIDAR EL HORARIO
        $validarHorario = ApiRequests::validarCita(['horario' => $request->horario, 'fecha' => $request->fecha]);

        if(isset($validarHorario['success']) && $validarHorario['success']){

            if(!$validarHorario['disponible']){
                throw ValidationException::withMessages(['horario' => $validarHorario['msg']]);
            }

        }

        //REGISTRAR RESERVA
        $store = ApiRequests::storeReserva([
            'fecha' => $request->fecha,
            'horario' => $request->horario,
            'cedula' => $request->cedula,
            'nombre' => $request->nombre,
            'telefono' => $request->telefono,
            'correo' => $request->correo,
            'paquete' => $request->paquete
        ]);

        //MOSTRAR MENSAJE
        $msg = 'Su reserva fue registrada, le estaremos contactando.';
        $icon = 'success';

        if(!isset($store['success'])){
            $msg = 'Ocurrió un error al registrar la reserva.';
            $icon = 'error';
        }else if(isset($store['msg'])){
            $msg = $store['msg'];
            $icon = 'warning';
        }

        return redirect()->action([ReservaController::class, 'create'])->with(['msg' => $msg, 'icon' => $icon]);

    }

}