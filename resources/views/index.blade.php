@extends('layouts.app')

@section('content')
    <!-- Bnner Section -->
    <section class="banner-section">
        <div class="swiper-container banner-slider">
            <div class="swiper-wrapper">
                <!-- Slide Item -->
                <div class="swiper-slide" style="background-image: url({{ asset('images/main-slider/ximage-1.png')}});">
                    <div class="content-outer">
                        <div class="content-box justify-content-center">
                            <div class="inner text-center">
                                <h1>Conduzca seguro. Obtenga su licencia</h1>
                                <div class="text"><b>Te preparamos para tu licencia con prácticas en plantel réplica de ciudad vial y te acompañamos en todo el proceso.</b></div>
                                <div class="link-box">
                                    <a href="{{route('reserva.create')}}" class="theme-btn btn-style-one"><span>Reservar clase</span></a>
                                    <!--<a href="#" class="theme-btn btn-style-one style-two"><span>Ver cursos</span></a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide Item -->
                <div class="swiper-slide" style="background-image: url({{ asset('images/main-slider/ximage-2.png')}});">
                    <div class="content-outer">
                        <div class="content-box justify-content-center">
                            <div class="inner text-center">
                                <h1>Conduzca seguro. Obtenga su licencia</h1>
                                <div class="text"><b>Te preparamos para tu licencia con prácticas en plantel réplica de ciudad vial y te acompañamos en todo el proceso.</b></div>
                                <div class="link-box">
                                    <a href="{{route('reserva.create')}}" class="theme-btn btn-style-one"><span>Reservar clase</span></a>
                                    <!--<a href="#" class="theme-btn btn-style-one style-two"><span>Ver cursos</span></a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-slider-nav">
            <div class="banner-slider-control banner-slider-button-prev"><span><i class="flaticon-left-arrow"></i></span></div>
            <div class="banner-slider-control banner-slider-button-next"><span><i class="flaticon-left-arrow"></i></span> </div>
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
    <section class="about-section pt-0 pb-0">
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
                            Nuestros instructores certificados te guiarán paso a paso, corrigiendo detalles y reforzando tu técnica, y te ofrecemos acompañamiento el día del examen, para que llegues tranquilo, preparado y con el respaldo de un equipo que quiere verte aprobar.</div>
                        <div class="bottom-content">
                            {{-- <h4>¡Reserve su clase hoy!</h4> --}}
                            <div class="contact-number">
                                <a href="{{route('reserva.create')}}"><i class="fa fa-arrow-right"></i>Reservar clase</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="driving-info-section" id="nosotros">
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

    <section class="driving-courses-section-two" id="planes">
        {{-- <div class="sec-bg" style="background-image: url({{asset('images/background/bg-5.jpg')}});"></div> --}}
        <div class="auto-container">
            <div class="top-content row m-0 justify-content-between align-items-center">
                <div class="sec-title">
                    <div class="sub-title">Nuestros planes</div>
                    <h2>Auto Escuela Líder</h2>
                </div>
                <div class="text">En nuestra escuela de manejo ofrecemos planes diseñados para adaptarse <br>
                    a cada tipo de estudiante, desde principiantes hasta personas que desean <br>
                    perfeccionar su conducción antes del examen práctico.</div>
            </div>
            <div class="outer-box">
                <div class="row">
                    @forelse ($paquetes as $pqs)
                        <div class="col-lg-4 course-block">
                            <div class="inner-box">
                                <div class="image"><img src="{{asset('images/resource/image-3.jpg')}}" alt=""></div>
                                <div class="lower-content">
                                    <h4><a href="#">{{$pqs['descripcion_paq']}}</a></h4>
                                    <div class="text">
                                        @forelse($pqs['lista_paquete'] as $item)
                                            {{$item['descripcion_paq_lista']}}<br>
                                            @empty

                                        @endforelse
                                    </div>
                                    <div class="course-info">
                                        {{-- <div class="instructor">
                                            <div class="thumb"><img src="{{asset('images/resource/author-1.jpg')}}" alt=""></div>
                                            <h5>James Thomas</h5>
                                            <div class="designation">Instructor</div>
                                        </div> --}}
                                        <div class="price w-100">
                                            {{-- <div class="thumb"><img src="{{asset('images/resource/image-6.jpg')}}" alt=""></div> --}}
                                            <h4>₡ @formatoDinero($pqs['precio_paq'])</h4>
                                        </div>
                                    </div>
                                    {{-- <div class="link-btn">
                                        <a href="highway-drive.html" class="theme-btn btn-style-one style-three"><span>View Course Details</span></a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    @empty

                    @endforelse
                </div>
            </div>
        </div>
    </section>

@endsection
