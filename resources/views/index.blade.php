@extends('layouts.app')

@section('content')

    <section class="hero-section">
        <div class="hero-bg" style="background-image: url('{{ asset('images/main-slider/ximage-2.png') }}');">
            <div class="hero-overlay"></div>

            <div class="container">
                <div class="hero-content">
                    <span class="hero-badge">Auto Escuela Líder</span>

                    <h1>Conduzca seguro<br>Obtenga su licencia</h1>

                    <p>
                        Te preparamos para tu licencia con prácticas en plantel réplica de ciudad vial
                        y te acompañamos en todo el proceso.
                    </p>

                    <div class="hero-buttons">
                        <a href="{{ route('reserva.create') }}" class="theme-btn btn-style-one">
                            <span>Reservar clase</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Bnner Section -->

    <!-- Services section -->
    <section class="services-section">
        <div class="auto-container">
            <div class="row no-gutters">
                <div class="service-block-one col-lg-3 col-md-6">
                    <div class="inner-box">
                        <div class="icon">
                            <img src="{{ asset('images/icons/motorcycle.png')}}" alt="">
                            <div class="hover-icon"><img src="{{ asset('images/icons/motorcycle.png')}}" alt=""></div>
                        </div>
                        <div class="lower-content">
                            <h4>Motocicletas</h4>
                            <div class="text">Capacitación en motocicleta orientada a la seguridad, el equilibrio y el control en carretera. Enseñamos desde lo básico hasta maniobras esenciales para que conduzca con mayor confianza y responsabilidad.</div>
                            <div class="read-more-btn"><a href="#"><img src="{{ asset('images/icons/icon-13.png')}}" alt=""></a></div>
                        </div>
                    </div>
                </div>
                <div class="service-block-one col-lg-3 col-md-6">
                    <div class="inner-box">
                        <div class="icon">
                            <img src="{{ asset('images/icons/quad-bike.png')}}" alt="">
                            <div class="hover-icon"><img src="{{ asset('images/icons/quad-bike.png')}}" alt=""></div>
                        </div>
                        <div class="lower-content">
                            <h4>Cuadraciclos</h4>
                            <div class="text">Ofrecemos formación en cuadriciclos para que aprenda a manejarlos de forma segura, estable y controlada. Ideal para quienes desean conocer su funcionamiento, mejorar su técnica y conducir con mayor seguridad.</div>
                            <div class="read-more-btn"><a href="#"><img src="{{ asset('images/icons/icon-13.png')}}" alt=""></a></div>
                        </div>
                    </div>
                </div>
                <div class="service-block-one col-lg-3 col-md-6">
                    <div class="inner-box">
                        <div class="icon">
                            <img src="{{ asset('images/icons/suv.png')}}" alt="">
                            <div class="hover-icon"><img src="{{ asset('images/icons/suv.png')}}" alt=""></div>
                        </div>
                        <div class="lower-content">
                            <h4>Automóviles</h4>
                            <div class="text">Aprenda a conducir vehículos con acompañamiento profesional, técnicas seguras y práctica enfocada en el manejo real y la prueba práctica. Le ayudamos a desarrollar confianza, control y dominio al volante.</div>
                            <div class="read-more-btn"><a href="#"><img src="{{ asset('images/icons/icon-13.png')}}" alt=""></a></div>
                        </div>
                    </div>
                </div>
                <div class="service-block-one col-lg-3 col-md-6">
                    <div class="inner-box">
                        <div class="icon">
                            <img src="{{ asset('images/icons/container-truck.png')}}" alt="">
                            <div class="hover-icon"><img src="{{ asset('images/icons/container-truck.png')}}" alt=""></div>
                        </div>
                        <div class="lower-content">
                            <h4>Vehículo pesado</h4>
                            <div class="text">Aprenda a conducir vehículo pesado con acompañamiento profesional, técnicas seguras y práctica enfocada en el manejo real y la prueba práctica. Le ayudamos a desarrollar confianza, control y dominio en este tipo de transporte.</div>
                            <div class="read-more-btn"><a href="#"><img src="{{ asset('images/icons/icon-13.png')}}" alt=""></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section pt-0 pb-0 mb-5">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-block">
                        <div class="image-one"><img src="{{ asset('images/resource/elegirnos-1.png')}}" alt=""></div>
                        <div class="image-two"><img src="{{ asset('images/resource/elegirnos-2.png')}}" alt=""></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content-block">
                        <div class="sec-title mb-20">
                            <div class="sub-title">La escuela de manejo líder del país</div>
                            <h2>¿Por qué elegirnos?</h2>
                        </div>
                        <div class="text">
                            En nuestra escuela te preparamos en un plantel réplica tipo COSEVI, para que practiques exactamente en un entorno igual al que enfrentarás el día del examen.
                            <br>
                            Te brindamos preparación completa para las fases 1, 2 y 3, asegurándonos de que domines cada etapa del proceso. Además, contamos con vehículos disponibles para realizar la prueba, para que no tengas que preocuparte por nada.
                            <br>
                            Nuestros instructores certificados te guiarán paso a paso, corrigiendo detalles y reforzando tu técnica, y te ofrecemos acompañamiento el día del examen, para que llegues tranquilo, preparado y con el respaldo de un equipo que quiere verte aprobar.
                        </div>
                        <div class="bottom-content">
                            <div class="contact-number">
                                <a href="{{route('reserva.create')}}"><i class="fa fa-arrow-right"></i>Reservar clase</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Showcase Section aqui -->
    <section class="video-showcase-section mb-0">
        <div class="video-bg-shape"></div>
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-6 content-column">
                    <div class="content-box">
                        <div class="sub-title">Conozca nuestra experiencia</div>
                        <h2>Vea cómo se vive una clase en nuestra escuela</h2>
                        <ul class="video-points p-0">
                            <li>Plantel réplica de ciudad vial</li>
                            <li>Instructores con acompañamiento real</li>
                            <li>Preparación para prueba práctica</li>
                            <li>Reservación rápida y sencilla</li>
                        </ul>
                        <div class="link-box">
                            <a href="{{ route('reserva.create') }}" class="theme-btn btn-style-one">
                                <span>Reservar clase</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 video-column">
                    <div class="video-frame-wrap">
                        <div class="video-phone-frame">
                            <video loop playsinline controls preload="metadata"> <!-- muted -->
                                <source src="{{ asset('videos/autoescuela_v2.mp4') }}" type="video/mp4">
                                Su navegador no soporta video HTML5.
                            </video>

                            <div class="video-badge">
                                Experiencia real
                                <span>Plantel y práctica guiada</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="driving-courses-section" id="planes">
        <div class="sec-bg" style="background-image: url({{asset('images/background/bg-2.jpg')}});"></div>
        <div class="auto-container">
            <div class="top-content row m-0 justify-content-between align-items-center">
                <div class="sec-title light">
                    <div class="sub-title">Obtenga su licencia</div>
                    <h2>Nuestros planes</h2>
                </div>
                <div class="text">En nuestra escuela de manejo ofrecemos planes diseñados para adaptarse <br>
                    a cada tipo de estudiante, desde principiantes hasta personas que desean <br>
                    perfeccionar su conducción antes del examen práctico.</div>
            </div>
            <!--Project Tabs-->
            <div class="project-tab">
    
                <div class="tab-btns-box">
                    <div class="tabs-header">
                        <ul class="project-tab-btns clearfix">
                            @foreach($paquetes['servicios'] as $index => $servicio)
                                <li class="p-tab-btn {{ $index === 0 ? 'active-btn' : '' }}" 
                                    data-tab="#p-tab-{{ $servicio['idpaqln'] }}">
                                    {{ $servicio['descripcion_paq_linea'] }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div> 
                
                <div class="outer-box">
                    <div class="p-tabs-content">
            
                        @foreach($paquetes['servicios'] as $index => $servicio)
                            @php $idpaqln = $servicio['idpaqln']; @endphp
            
                            <div class="p-tab {{ $index === 0 ? 'active-tab' : '' }}" id="p-tab-{{ $idpaqln }}">
                                <div class="row row-10">
                                    <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "2" } , "992":{ "items" : "3" }, "1200":{ "items" : "3" }}}'>
            
                                        @forelse($paquetes['paquetes'][$idpaqln] ?? [] as $paq)
                                            <div class="col-lg-12 course-block">
                                                <div class="inner-box">
                                                    <div class="image">
                                                        <img src="{{ asset('images/resource/image-3.jpg') }}" alt="">
                                                    </div>
                                                    <div class="lower-content">
                                                        <h4><a href="#">{{ $paq['descripcion_paq'] }}</a></h4>
            
                                                        {{-- Lista de lo que incluye --}}
                                                        @isset($paquetes['lista'][$paq['idpaq']])
                                                            <ul class="mb-2">
                                                                @foreach($paquetes['lista'][$paq['idpaq']] as $item)
                                                                    <li>{{ $item['descripcion_paq_lista'] }}</li>
                                                                @endforeach
                                                            </ul>
                                                        @endisset
            
                                                        <div class="course-info">
                                                            <div class="price w-100">
                                                                <h5>
                                                                    ₡@formatoDinero($paq['precio_paq'])
                                                                </h5>
                                                            </div>
                                                        </div>
                                                        {{-- <div class="link-btn">
                                                            <a href="#reservar" class="theme-btn btn-style-one style-three">
                                                                <span>Reservar</span>
                                                            </a>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                            <p>No hay paquetes disponibles.</p>
                                        @endforelse
            
                                    </div>
                                </div>
                            </div>
                        @endforeach
            
                    </div>                    
                </div>
            </div>
        </div>
    </section>

    <section class="driving-info-section mb-0" id="nosotros">
        <div class="traffic-cone" data-parallax='{"y": 30}'><img src="{{ asset('images/resource/image-8.jpg')}}" alt=""></div>
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-block">
                        <div class="image" data-parallax='{"x": 50}'><img src="{{ asset('images/resource/image-7.jpg')}}" alt=""></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content-block">
                        <div class="sec-title mb-20">
                            <div class="sub-title">Educación vial de calidad</div>
                            <h3><b>Enseñanza moderna</b><br> <b>para formar mejores conductores</b></h3>
                        </div>
                        <div class="icon-box">
                            <div class="icon"><img src="{{ asset('images/icons/icon-7.png')}}" alt=""></div>
                            <div class="content">
                                <h4>Misión</h4>
                                <div class="text">Formar conductores responsables, conscientes y preparados, mediante una educación vial integral y apegada a la normativa legal vigente en Costa Rica.</div>
                            </div>
                        </div>
                        <div class="icon-box">
                            <div class="icon"><img src="{{ asset('images/icons/icon-8.png')}}" alt=""></div>
                            <div class="content">
                                <h4>Visión</h4>
                                <div class="text">Ser la institución líder y referente nacional en educación vial en Costa Rica, destacándonos por nuestra innovación, la expansión de nuestros planteles y la calidad de nuestros servicios.</div>
                            </div>
                        </div>
                        <div class="link-btn"><a href="#planes" class="theme-btn btn-style-one style-three"><span>Ver planes </span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PLANES -->
    {{-- <section class="plans-section py-5" id="planes">
        <div class="auto-container">
            <div class="sec-title text-center mb-3">
                <h2 class="mb-0">Nuestros planes</h2>
                <div class="sub-title mb-3"></div>
                <div class="text">
                    Encuentre el plan ideal para aprender a conducir.
                </div>
            </div>

            <div class="plans-filter-wrap mb-4">
                <div class="plans-filter-card">
                    <label for="tipoVehiculoPlan" class="plans-label">Seleccione el tipo de vehículo:</label>
                    <select id="tipoVehiculoPlan" class="plans-select">
                        <option value="automovil" selected>Automóviles</option>
                        <option value="motocicleta">Motocicletas</option>
                        <option value="cuadraciclo">Cuadraciclos</option>
                        <option value="pesado">Vehículo pesado</option>
                    </select>
                </div>
            </div>

            <div class="vehicle-plan-box">
                <div class="vehicle-plan-head mb-4">
                    <div class="vehicle-plan-head-icon">
                        <img id="vehiclePlanImage" src="{{ asset('images/icons/suv.png') }}" alt="Tipo de vehículo">
                    </div>

                    <div class="vehicle-plan-head-content">
                        <h3 id="vehiclePlanTitle">Automóviles</h3>
                        <p id="vehiclePlanDescription">
                            Planes para conducción real, maniobras y preparación para la prueba práctica.
                        </p>
                    </div>
                </div>

                <div class="row" id="plansContainer">
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="plan-item">
                            <div class="plan-item-image">
                                <img src="{{ asset('images/planes/auto-plan-1.jpg') }}" alt="Paquete #1">
                            </div>

                            <div class="plan-top">
                                <h4>Paquete #1</h4>
                                <span class="plan-price">₡60,000</span>
                            </div>

                            <ul>
                                <li>5 horas de práctica</li>
                                <li>Incluye instructor</li>
                                <li>Uso de plantel réplica</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="plan-item">
                            <div class="plan-item-image">
                                <img src="{{ asset('images/planes/auto-plan-2.jpg') }}" alt="Paquete #2">
                            </div>

                            <div class="plan-top">
                                <h4>Paquete #2</h4>
                                <span class="plan-price">₡109,000</span>
                            </div>

                            <ul>
                                <li>10 horas de práctica</li>
                                <li>Incluye instructor</li>
                                <li>Acompañamiento para prueba práctica</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-3">
                    <a href="{{ route('reserva.create') }}" class="theme-btn btn-style-one">
                        <span>Reservar clase</span>
                    </a>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- PLANES -->

@endsection
