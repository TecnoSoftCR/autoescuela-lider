@extends('layouts.app')

@push('links')
    @livewireStyles
@endpush

@section('content')
    <section class="info-form-section" style="background-image: url({{ asset('images/background/bg-2.jpg')}});">
        <div class="signal-image-one" data-parallax='{"x": -30}'><img src="{{ asset('images/resource/image-1.png')}}" alt=""></div>
        <div class="signal-image-two" data-parallax='{"x": 30}'><img src="{{ asset('images/resource/image-2.png')}}" alt=""></div>
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="content-block">
                        <div class="sec-title light mb-30">
                            <div class="sub-title">Inscríbete en tus clases hoy</div>
                            <h2>Agendar cita</h2>
                        </div>
                        <div class="text mb-30">Da el primer paso para obtener tu licencia de conducir. Agenda hoy tu cita con nuestros instructores y comienza a practicar en el plantel réplica de ciudad vial, diseñado para que llegues al examen con confianza y seguridad.</div>
                        <ul class="list">
                            <li>Reserva en línea</li>
                            <li>Paquetes de formación completos</li>
                            <li>Preparación para el examen de manejo</li>
                            <li>Servicio flexible, confiable y paciente</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="consult-form">
                        <h3 class="mb-3">Reserva tu clase</h3>
                        <livewire:reservar-cita/>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    @livewireScripts
    @include('layouts.alert-confirm')
@endpush