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
                                <h1>Aprenda a conducir con seguridad, <br> apruebe su prueba de manejo</h1>
                                <div class="text"><b>Te preparamos para tu licencia con plantel tipo COSEVI y acompañamiento hasta el examen.</b></div>
                                <div class="link-box">
                                    <a href="{{route('reservar')}}" class="theme-btn btn-style-one"><span>Reservar clase</span></a>
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
                                <h1>Aprenda a conducir con seguridad, <br> apruebe su prueba de manejo</h1>
                                <div class="text"><b>Te preparamos para tu licencia con plantel tipo COSEVI y apoyo hasta el examen.</b></div>
                                <div class="link-box">
                                    <a href="{{route('reservar')}}" class="theme-btn btn-style-one"><span>Reservar clase</span></a>
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
    <section class="about-section pt-0">
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
                                <a href="{{route('reservar')}}"><i class="fa fa-arrow-right"></i>Reservar clase</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature banner section -->
    {{-- <section class="feature-banner-section">
        <div class="auto-container">
            <div class="outer-box" style="background-image: url({{ asset('images/background/bg-3.jpg')}});">
                <h2>Apruebe su examen de manejo en el primer intento</h2>
                <h3><a href="#">Reserve aquí</a></h3>
            </div>
        </div>
    </section> --}}

    <section class="driving-info-section">
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

    <!-- Funfacts Section -->
    {{--<section class="funfacts-section">
        <div class="auto-container">
            <div class="row">
                <!--Column-->
                <div class="column counter-column col-lg-4 col-md-6">
                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-outer">
                            <div class="icon"><img src="{{ asset('images/icons/icon-9.png')}}" alt=""></div>
                            <div class="hover-icon"><img src="{{ asset('images/icons/icon-9.png')}}" alt=""></div>
                        </div>
                        <div class="content">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="3000" data-stop="98">0</span><span>%</span>
                            </div>
                            <div class="text">Our Driving Test <br> Passing Rate</div>
                        </div>
                    </div>
                </div>
                <!--Column-->
                <div class="column counter-column col-lg-4 col-md-6">
                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-outer">
                            <div class="icon"><img src="{{ asset('images/icons/icon-10.png')}}" alt=""></div>
                            <div class="hover-icon"><img src="{{ asset('images/icons/icon-10.png')}}" alt=""></div>
                        </div>
                        <div class="content">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="3000" data-stop="450">0</span><span>+</span>
                            </div>
                            <div class="text">Happy Customers <br> Nationwide</div>
                        </div>
                    </div>
                </div>
                <!--Column-->
                <div class="column counter-column col-lg-4 col-md-6">
                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-outer">
                            <div class="icon"><img src="{{ asset('images/icons/icon-11.png')}}" alt=""></div>
                            <div class="hover-icon"><img src="{{ asset('images/icons/icon-11.png')}}" alt=""></div>
                        </div>
                        <div class="content">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="3000" data-stop="6">0</span><span>Yrs</span>
                            </div>
                            <div class="text">Our Instructor’s <br> Teaching Experience</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>--}}

    <!-- Info form section -->
    {{--<section class="info-form-section" style="background-image: url({{ asset('images/background/bg-2.jpg')}});">
        <div class="signal-image-one" data-parallax='{"x": -30}'><img src="{{ asset('images/resource/image-1.png')}}" alt=""></div>
        <div class="signal-image-two" data-parallax='{"x": 30}'><img src="{{ asset('images/resource/image-2.png')}}" alt=""></div>
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="content-block">
                        <div class="sec-title light mb-30">
                            <div class="sub-title">enroll in your lessons today</div>
                            <h2>Get Appointment With <br> Qualified Instructors</h2>
                        </div>
                        <div class="text mb-30">Nunc quam arcu, pretium quis quam sed, laoreet efficitur aliquam  lobortis sem consequat consequat imperdiet. Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididug ut labore et dolore magna aliqua veniam. </div>
                        <ul class="list">
                            <li>Driving school approved online booking</li>
                            <li>Lessons & courses 7 days a week</li>
                            <li>Special weekend classes for busy people</li>
                            <li>Flexibility, Reliability, Patience service</li>
                            <li>Road Test Preparation with 98% success</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="consult-form">
                        <h3>Book Your Lessons, Just Fill-In The Form</h3>
                        <div class="text">Nunc quam ar pretium quis lobortis consequat</div>
                        <form action="#" class="">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input placeholder="First Name" type="text">
                                </div>
                                <div class="form-group col-md-6">
                                    <input placeholder="Last Name" type="text">
                                </div>
                                <div class="form-group col-md-6">
                                    <input placeholder="Email" type="email">
                                </div>
                                <div class="form-group col-md-6">
                                    <input placeholder="Phone" type="text">
                                </div>
                                <div class="form-group col-md-12">
                                    <input placeholder="Course You’re Interested In" type="text">
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea name="form_message" placeholder="Massage"></textarea>
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
    </section>--}}

    <!-- Working Process section -->
    {{--<section class="working-process-section">
        <div class="background-icon"><img src="{{ asset('images/icons/icon-12.png')}}" alt=""></div>
        <div class="auto-container">
            <div class="top-content">
                <div class="sec-title text-center mb-30">
                    <div class="sub-title">learning drive is easy with us</div>
                    <h2>How Drivega Works</h2>
                </div>
                <div class="text text-center">Aute irure dolor reprehenderit cepteur sint ocaecat cupidatate <br> sed ipsum non proident int sunt indys culpa quis. </div>
            </div>
            <div class="wrapper-box">
                <div class="row">
                    <div class="col-lg-4 col-md-6 process-block">
                        <div class="inner-box">
                            <div class="count">01</div>
                            <div class="content">
                                <div>
                                    <h4>Choose a Course <br> With Right Package</h4>
                                    <div class="text">Nunc quam ar pretium quis <br> lobortis sel consequat conse <br> tetur diam nuc bibend.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 process-block active">
                        <div class="inner-box">
                            <div class="count">02</div>
                            <div class="content">
                                <div>
                                    <h4>Start Your Course <br> With Our Instructors</h4>
                                    <div class="text">Nunc quam ar pretium quis <br> lobortis sel consequat conse <br> tetur diam nuc bibend.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 process-block">
                        <div class="inner-box">
                            <div class="count">03</div>
                            <div class="content">
                                <div>
                                    <h4>Pass Your Road <br> Test & Get License</h4>
                                    <div class="text">Nunc quam ar pretium quis <br> lobortis sel consequat conse <br> tetur diam nuc bibend.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}

    <!-- CTA section -->
    {{-- <section class="cta-section" style="background-image: url({{ asset('images/background/bg-4.jpg')}});">
        <div class="auto-container">
            <h5>How WE MAKE A DIFFERENCE</h5>
            <h2>We Give Best Guidence To Each Student, <br> That’s Why We Produce Confident & Safe Drivers </h2>
            <div class="link-box">
                <a href="#" class="theme-btn btn-style-one"><span>Reservar clase</span></a>
                <a href="#" class="theme-btn btn-style-one style-two"><span>Learn More</span></a>
            </div>
        </div>
    </section> --}}

    <!-- Testimonials section -->
    {{--<section class="testimonials-section">
        <div class="sec-bg" style="background-image: url({{ asset('images/background/bg-5.jpg')}});"></div>
        <div class="auto-container">
            <div class="top-content">
                <div class="sec-title text-center mb-30">
                    <div class="sub-title">What our clients are saying</div>
                    <h2>Customer Testimonials</h2>
                </div>
                <div class="text">Aute irure dolor reprehenderit cepteur sint ocaecat cupidatate <br> sed ipsum non proident int sunt indys culpa quis. </div>
            </div>
            <div class="row">
                <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "center": false, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "1" } , "992":{ "items" : "1" }, "1200":{ "items" : "2" }}}'>
                    <div class="col-lg-12 testimonial-block">
                        <div class="inner-box">
                            <!--<div class="author-info">
                                <div class="thumb"><img src="{{ asset('images/resource/author-2.jpg')}}" alt=""></div>
                                <h4>James Thomas</h4>
                                <div class="location">California, USA</div>
                            </div>-->
                            <div class="content">
                                <div class="rating-info">
                                    <h5>Earned Driving License</h5>
                                    <div class="rating">
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                    </div>
                                </div>
                                <div class="text">Dolor sitam consectetur sed adipisicing <br> eiusmod tempor cididunt laboret dolors <br>  magn aliquat enim sed minim veniam eu <br> nostrud lorem ipsum dolor.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 testimonial-block">
                        <div class="inner-box">
                            <div class="author-info">
                                <div class="thumb"><img src="{{ asset('images/resource/author-3.jpg')}}" alt=""></div>
                                <h4>Tanya Benson</h4>
                                <div class="location">California, USA</div>
                            </div>
                            <div class="content">
                                <div class="rating-info">
                                    <h5>Earned Driving License</h5>
                                    <div class="rating">
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                    </div>
                                </div>
                                <div class="text">Dolor sitam consectetur sed adipisicing <br> eiusmod tempor cididunt laboret dolors <br>  magn aliquat enim sed minim veniam eu <br> nostrud lorem ipsum dolor.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 testimonial-block">
                        <div class="inner-box">
                            <div class="author-info">
                                <div class="thumb"><img src="{{ asset('images/resource/author-2.jpg')}}" alt=""></div>
                                <h4>James Thomas</h4>
                                <div class="location">California, USA</div>
                            </div>
                            <div class="content">
                                <div class="rating-info">
                                    <h5>Earned Driving License</h5>
                                    <div class="rating">
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                    </div>
                                </div>
                                <div class="text">Dolor sitam consectetur sed adipisicing <br> eiusmod tempor cididunt laboret dolors <br>  magn aliquat enim sed minim veniam eu <br> nostrud lorem ipsum dolor.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 testimonial-block">
                        <div class="inner-box">
                            <div class="author-info">
                                <div class="thumb"><img src="{{ asset('images/resource/author-3.jpg')}}" alt=""></div>
                                <h4>Tanya Benson</h4>
                                <div class="location">California, USA</div>
                            </div>
                            <div class="content">
                                <div class="rating-info">
                                    <h5>Earned Driving License</h5>
                                    <div class="rating">
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                    </div>
                                </div>
                                <div class="text">Dolor sitam consectetur sed adipisicing <br> eiusmod tempor cididunt laboret dolors <br>  magn aliquat enim sed minim veniam eu <br> nostrud lorem ipsum dolor.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 testimonial-block">
                        <div class="inner-box">
                            <div class="author-info">
                                <div class="thumb"><img src="{{ asset('images/resource/author-2.jpg')}}" alt=""></div>
                                <h4>James Thomas</h4>
                                <div class="location">California, USA</div>
                            </div>
                            <div class="content">
                                <div class="rating-info">
                                    <h5>Earned Driving License</h5>
                                    <div class="rating">
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                    </div>
                                </div>
                                <div class="text">Dolor sitam consectetur sed adipisicing <br> eiusmod tempor cididunt laboret dolors <br>  magn aliquat enim sed minim veniam eu <br> nostrud lorem ipsum dolor.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 testimonial-block">
                        <div class="inner-box">
                            <div class="author-info">
                                <div class="thumb"><img src="{{ asset('images/resource/author-3.jpg')}}" alt=""></div>
                                <h4>Tanya Benson</h4>
                                <div class="location">California, USA</div>
                            </div>
                            <div class="content">
                                <div class="rating-info">
                                    <h5>Earned Driving License</h5>
                                    <div class="rating">
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                    </div>
                                </div>
                                <div class="text">Dolor sitam consectetur sed adipisicing <br> eiusmod tempor cididunt laboret dolors <br>  magn aliquat enim sed minim veniam eu <br> nostrud lorem ipsum dolor.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="brand-logo">
                <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "center": false, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "3" } , "992":{ "items" : "3" }, "1200":{ "items" : "4" }}}'>
                    <div class="single-logo"><img src="{{ asset('images/resource/client-logo-1.jpg')}}" alt=""></div>
                    <div class="single-logo"><img src="{{ asset('images/resource/client-logo-2.jpg')}}" alt=""></div>
                    <div class="single-logo"><img src="{{ asset('images/resource/client-logo-3.jpg')}}" alt=""></div>
                    <div class="single-logo"><img src="{{ asset('images/resource/client-logo-4.jpg')}}" alt=""></div>
                </div>
            </div>
        </div>
    </section>--}}

    <!-- Blog Section -->
    <section class="blog-section" id="planes">
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
            <div class="row">
                <div class="col-lg-4 news-block">
                    <div class="inner-box">
                        <div class="image"><img src="{{ asset('images/plan1.jpg')}}" alt=""></div> <!-- images/resource/news-1.jpg -->
                        <div class="lower-content">
                            {{--<div class="post-meta-info">
                                <div class="category">Driving Course</div>
                                <div class="date">Oct 17, 2020</div>
                                <div class="comment"><i class="far fa-comments"></i>46</div>
                            </div>--}}
                            <h4><a href="#">Plan 1</a></h4>
                            <p class="text">
                            Ideal para quienes desean aprender los fundamentos de la conducción. Incluye clases prácticas donde aprenderás control del vehículo, manejo seguro, señales de tránsito y técnicas básicas para desenvolverte con confianza en la vía.
                            </p>
                            <!--<div class="link-btn"><a href="#" class="theme-btn btn-style-one style-three"><span>Read Full Story</span></a></div>-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 news-block">
                    <div class="inner-box">
                        <div class="image"><img src="{{ asset('images/plan2.jpg')}}" alt=""></div>
                        <div class="lower-content">
                            <!--<div class="post-meta-info">
                                <div class="category">Driving Course</div>
                                <div class="date">Oct 15, 2020</div>
                                <div class="comment"><i class="far fa-comments"></i>21</div>
                            </div>-->
                            <h4><a href="#">Plan 2</a></h4>
                            <p class="text">Pensado para quienes ya tienen conocimientos básicos pero desean mejorar su técnica. Este plan refuerza maniobras importantes como parqueo, control en pendientes, giros, y conducción en diferentes situaciones de tránsito.</p>
                            <!--<div class="link-btn"><a href="#" class="theme-btn btn-style-one style-three"><span>Read Full Story</span></a></div>-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 news-block">
                    <div class="inner-box">
                        <div class="image"><img src="{{ asset('images/plan4.jpg')}}" alt=""></div>
                        <div class="lower-content">
                            <!--<div class="post-meta-info">
                                <div class="category">Driving Course</div>
                                <div class="date">Oct 12, 2020</div>
                                <div class="comment"><i class="far fa-comments"></i>29</div>
                            </div>-->
                            <h4><a href="#">Plan 3</a></h4>
                            <p class="text">Especializado para quienes están próximos a realizar la prueba práctica de COSEVI. Practicarás en un plantel réplica del circuito de examen, simulando exactamente las condiciones reales para aumentar tus probabilidades de aprobar.</p>
                            <!--<div class="link-btn"><a href="#" class="theme-btn btn-style-one style-three"><span>Read Full Story</span></a></div>-->
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

@endsection
