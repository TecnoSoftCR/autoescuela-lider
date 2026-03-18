@extends('layouts.app')

@section('content')
    <section class="hero-section mb-5">
        <div class="hero-bg" style="background-image: url('{{ asset('images/main-slider/ximage-2.png') }}');">
            <div class="hero-overlay"></div>

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
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

                    <div class="col-lg-6">
                        <div class="video-frame-wrap">
                            <div class="video-phone-frame">
                                <video loop playsinline controls preload="metadata">
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

    <!-- PLANES -->
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
                    perfeccionar su conducción antes del examen práctico.
                </div>
            </div>
            <div class="project-tab">
                <div class="tab-btns-box">
                    <div class="tabs-header">
                        <ul class="project-tab-btns clearfix">
                            @foreach($paquetes['servicios'] as $index => $servicio)
                                <li class="p-tab-btn {{ $index === 2 ? 'active-btn' : '' }}"
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

                            <div class="p-tab {{ $index === 2 ? 'active-tab' : '' }}" id="p-tab-{{ $idpaqln }}">
                                <div class="row row-10">
                                    <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": false, "autoplayTimeout": 10000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "2" } , "992":{ "items" : "3" }, "1200":{ "items" : "3" }}}'>

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
    <!-- PLANES -->

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
@endsection
