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
                        <form method="POST" action="{{route('reserva.post')}}" novalidate>
                            @csrf
                            <div class="row">

                                <div class="form-group col-md-12 mb-3">
                                    <input type="date" name="fecha" class="form-control @error('fecha') is-invalid @enderror" min="{{date('Y-m-d')}}" value="{{old('fecha')}}">
                                    @error("fecha")
                                        <span class="invalid-feedback d-block" role="alert"><strong>{{$message}}</strong></span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-12 mb-3">
                                    <select name="horario" class="form-select @error('horario') is-invalid @enderror">
                                        @forelse ($horarios as $h)
                                            <option>{{$h['horario']}}</option>
                                        @empty
                                            
                                        @endforelse
                                    </select>
                                    @error("horario")
                                        <span class="invalid-feedback d-block" role="alert"><strong>{{$message}}</strong></span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-5 mb-3">
                                    <input placeholder="Cédula" type="text" name="cedula" class="form-control @error('cedula') is-invalid @enderror" value="{{old('cedula')}}">
                                    @error("cedula")
                                        <span class="invalid-feedback d-block" role="alert"><strong>{{$message}}</strong></span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-7 mb-3">
                                    <input placeholder="Nombre" type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{old('nombre')}}">
                                    @error("nombre")
                                        <span class="invalid-feedback d-block" role="alert"><strong>{{$message}}</strong></span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-5 mb-3">
                                    <input placeholder="Teléfono" type="text" name="telefono" class="form-control @error('telefono') is-invalid @enderror" value="{{old('telefono')}}">
                                    @error("telefono")
                                        <span class="invalid-feedback d-block" role="alert"><strong>{{$message}}</strong></span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-7 mb-3">
                                    <input placeholder="Correo" type="text" name="correo" class="form-control @error('correo') is-invalid @enderror" value="{{old('correo')}}">
                                    @error("correo")
                                        <span class="invalid-feedback d-block" role="alert"><strong>{{$message}}</strong></span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-12 mb-3">

                                    <select name="paquete" class="form-select @error('paquete') is-invalid @enderror">
                                        @foreach($paquetes as $pqs)
                                            <option value="{{$pqs['idpaq']}}">{{$pqs['descripcion_paq']}} - {{$pqs['precio_paq']}}</option>
                                        @endforeach
                                    </select>
                                    @error("paquete")
                                        <span class="invalid-feedback d-block" role="alert"><strong>{{$message}}</strong></span>
                                    @enderror

                                    <p class="mb-0"><b>Incluye:</b></p>
                                    <ul class="list-paquete">
                                        @isset($paquetes[0])
                                            @foreach($paquetes[0]['lista_paquete'] as $lista)
                                                <li>{{$lista['descripcion_paq_lista']}}</li>
                                            @endforeach
                                        @endisset
                                    </ul>

                                </div>

                                {{-- <div class="form-group col-md-12 mb-3">
                                    <textarea name="detalle" class="form-control @error('detalle') is-invalid @enderror" placeholder="Detalle">{{old('detalle')}}</textarea>
                                    @error("detalle")
                                        <span class="invalid-feedback d-block" role="alert"><strong>{{$message}}</strong></span>
                                    @enderror
                                </div> --}}

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

@push('scripts')
    @if(session()->has('msg'))
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    icon: "{{session()->get('icon')}}",
                    title: "{{session()->get('msg')}}",
                    showConfirmButton: false
                });
            });
        </script>
        {{session()->forget('msg')}}
        {{session()->forget('icon')}}
    @endif  
@endpush
