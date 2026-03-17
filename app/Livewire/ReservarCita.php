<?php

namespace App\Livewire;

use App\Helpers\ApiRequests;
use Illuminate\Support\Carbon;
use Livewire\Component;

class ReservarCita extends Component {

    public $minDate;
    public $horarios;
    public $servicios;
    public $paquetes;
    public $lista;
    
    public $fecha;
    public $horario;
    public $cedula;
    public $nombre;
    public $telefono;
    public $correo;
    public $servicioSeleccionado = '';
    public $paquete = '';
    
    // Paquetes filtrados según el servicio seleccionado
    public $paquetesFiltrados = [];
    public $listaSeleccionada = [];
 
    public function mount(){
        $this->minDate = Carbon::now()->addDays(1)->format('Y-m-d');
        $this->horarios = ApiRequests::getHorarios();

        $listaPaquetes = ApiRequests::getPaquetes();

        $this->servicios = $listaPaquetes['servicios'];
        $this->paquetes  = $listaPaquetes['paquetes'];
        $this->lista     = $listaPaquetes['lista'];

        if (!empty($this->horarios)) {
            $this->horario = $this->horarios[0]['horario'];
        }

    }

    // Se ejecuta cada vez que cambia el servicio seleccionado
    public function updatedServicioSeleccionado($value){
        $this->paquete          = '';
        $this->listaSeleccionada = [];
        $this->paquetesFiltrados = $this->paquetes[$value] ?? [];
    }

    // Se ejecuta cada vez que cambia el paquete seleccionado
    public function updatedPaquete($value){
        $this->listaSeleccionada = $this->lista[$value] ?? [];
    }

    public function crearReserva(){

        $this->validate([
            'fecha'                => ['required', 'date_format:Y-m-d'],
            'horario'              => ['required'],
            'cedula'               => ['required', 'max:20'],
            'nombre'               => ['required', 'max:100'],
            'telefono'             => ['required', 'string', 'max:20'],
            'correo'               => ['required', 'email:rfc,dns', 'max:100'],
            'servicioSeleccionado' => ['required'],
            'paquete'              => ['required'],
        ]);
    
        // VALIDAR EL PAQUETE
        $paquete = ApiRequests::getPaquete($this->paquete);
    
        if (!isset($paquete['idpaq'])) {
            $this->addError('paquete', 'El paquete no es válido.');
            return;
        }
    
        // VALIDAR EL HORARIO
        $validarHorario = ApiRequests::validarCita([
            'horario' => $this->horario,
            'fecha'   => $this->fecha,
        ]);
    
        if (isset($validarHorario['success']) && $validarHorario['success']) {
            if (!$validarHorario['disponible']) {
                $this->addError('horario', $validarHorario['msg']);
                return;
            }
        }
    
        // REGISTRAR RESERVA
        $store = ApiRequests::storeReserva([
            'fecha'    => $this->fecha,
            'horario'  => $this->horario,
            'cedula'   => $this->cedula,
            'nombre'   => $this->nombre,
            'telefono' => $this->telefono,
            'correo'   => $this->correo,
            'paquete'  => $this->paquete,
        ]);
        
        // MOSTRAR MENSAJE
        $msg  = 'Su reserva fue registrada, le estaremos contactando.';
        $icon = 'success';
    
        if (!isset($store['success'])) {
            $msg  = 'Ocurrió un error al registrar la reserva.';
            $icon = 'error';
        } elseif (isset($store['msg'])) {
            $msg  = $store['msg'];
            $icon = 'warning';
        }
    
        session()->flash('msg', $msg);
        session()->flash('icon', $icon);
    
        $this->redirect(route('reserva.create'));

    }
    
    public function render(){
        return view('components.⚡reservar-cita');
    }

}