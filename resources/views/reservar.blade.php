@extends('layouts.app')

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
                        <div class="text mb-30">Da el primer paso para obtener tu licencia de conducir. Agenda hoy tu cita con nuestros instructores y comienza a practicar en un plantel réplica tipo COSEVI, diseñado para que llegues al examen con confianza y seguridad.</div>
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
                        <form action="#" class="">
                            <div class="row">
                                @php
                                    $date = date('Y-m-d');
                                @endphp

                                <div class="form-group col-md-12 mb-3">
                                    <input type="date" name="fecha" id="fecha" value="{{$date}}">
                                </div>

                                <div class="form-group col-md-5 mb-3">
                                    <input placeholder="Cédula" type="text">
                                </div>

                                <div class="form-group col-md-7 mb-3">
                                    <input placeholder="Nombre" type="text">
                                </div>

                                <div class="form-group col-md-5 mb-3">
                                    <input placeholder="Teléfono" type="text">
                                </div>

                                <div class="form-group col-md-7 mb-3">
                                    <input placeholder="Correo" type="email">
                                </div>

                                <div class="form-group col-md-12 mb-3">
                                    <input placeholder="Paquete de interes" type="text">
                                </div>
                                <div class="form-group col-md-12 mb-3">
                                    <textarea name="form_message" placeholder="Detalle"></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <button type="submit" class="theme-btn btn-style-one"><span>Reservar clase</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
