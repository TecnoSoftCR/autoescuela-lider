@extends('layouts.app')

@section('content')
    <section class="hero-section">
        <div class="hero-bg" style="background-image: url('{{ asset('images/main-slider/ximage-2.png') }}');">
            <div class="hero-overlay"></div>

            <div class="container">
                <div class="hero-content">
                    <span class="hero-badge">Auto Escuela Líder</span>

                    <h1>Conduzca seguro.<br>Obtenga su licencia</h1>

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
                            <li>Plantel réplica tipo COSEVI</li>
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

    <section class="driving-info-section mb-3" id="nosotros">
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
@endsection
