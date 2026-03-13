<header class="main-header header-style-one">

    <!-- Header Top -->
    <div class="header-top">
        <div class="auto-container">
            <div class="inner-container">
                <div class="left-column">
                    <ul class="contact-info">
                        <li><a href="#"><i class="pe-7s-paper-plane text-white"></i>Paso Ancho, San José</a></li>
                        <li><a href="tel:928886660000"><i class="pe-7s-mail-open text-white"></i>info@autoescuelalider.com</a></li>
                        <li><i class="pe-7s-clock text-white"></i>Horario flexible</li>
                    </ul>
                </div>
                <div class="right-column">
                    <ul class="social-icon">
                        <li><a href="https://www.facebook.com/autoescuelaliderdemanejo/?locale=es_LA" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <!--<li><a href="#"><i class="fab fa-twitter"></i></a></li>-->
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <!--<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>-->
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Upper -->
    <div class="header-upper">
        <div class="auto-container">
            <div class="inner-container">
                <!--Logo-->
                <div class="logo-box">
                    <div class="logo"><a href="#"><img src="{{ asset('images/logo.png')}}" alt="Logo"></a></div>
                </div>
                <div class="right-column">
                    <!--Nav Box-->
                    <div class="nav-outer">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><img src="{{ asset('images/icons/icon-bar.png')}}" alt=""></div>

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation">
                                    <li><a href="{{route('index')}}">Inicio</a></li>
                                    <li class="dropdown"><a href="#planes">Planes</a>
                                        <!--<ul>
                                            <li><a href="#">Paquete #1</a></li>
                                            <li><a href="#">Paquete #2</a></li>
                                            <li><a href="#">Paquete #3</a></li>
                                            <li><a href="#">Paquete #4</a></li>
                                        </ul>-->
                                    </li>
                                    <li><a href="{{route('reserva.create')}}">Reservar clase</a></li>
                                    <li><a href="#nosotros">Nosotros</a></li>
                                    <!--<li><a href="#">Contacto</a></li>-->
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="navbar-right">
                        {{-- <button type="button" class="theme-btn search-toggler"><span class="flaticon-search-1"></span></button> --}}
                        <div class="contact-info">
                            <div class="icon"><span class="fas fa-phone-volume"></span></div>
                            <div class="content">
                                <h5>Contáctenos</h5>
                                <h4><a href="tel:+5067040-0506">7040-0506</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="header-upper">
            <div class="auto-container">
                <div class="inner-container">
                    <!--Logo-->
                    <div class="logo-box">
                        <div class="logo"><a href="#"><img src="{{ asset('images/logo.png')}}" alt=""></a></div>
                    </div>
                    <div class="right-column">
                        <!--Nav Box-->
                        <div class="nav-outer">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler"><img src="{{ asset('images/icons/icon-bar.png')}}" alt=""></div>

                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md navbar-light">
                            </nav>
                        </div>
                        <div class="navbar-right">
                            {{-- <button type="button" class="theme-btn search-toggler"><span class="flaticon-search-1"></span></button> --}}
                            <div class="contact-info">
                                <div class="icon"><span class="fas fa-phone-volume"></span></div>
                                <div class="content">
                                    <h5>Contáctenos</h5>
                                    <h4><a href="tel:+5067040-0506">7040-0506</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Sticky Menu -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-remove"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="#"><img src="{{ asset('images/logo.png') }}" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <!--Social Links-->
            <div class="social-links">
                <ul class="clearfix">
                    {{-- <li><a href="#"><span class="fab fa-twitter"></span></a></li> --}}
                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                    {{-- <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li> --}}
                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                    {{-- <li><a href="#"><span class="fab fa-youtube"></span></a></li> --}}
                </ul>
            </div>
        </nav>
    </div><!-- End Mobile Menu -->

    <div class="nav-overlay">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div>
</header>
