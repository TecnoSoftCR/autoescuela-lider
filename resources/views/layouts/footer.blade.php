<footer class="main-footer" style="background-image: url({{ asset('images/background/bg-1.jpg')}});">
    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">

                <!--Column-->
                <div class="column col-lg-3 col-md-6">
                    <div class="widget about-widget">
                        <div class="logo"><a href="#"><img src="{{ asset('images/logo.png')}}" alt=""></a></div>
                        <div class="text">La escuela de manejo líder del país.</div>
                        <ul class="social-links">
                            {{-- <li><a href="#"><i class="fab fa-twitter"></i></a></li> --}}
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            {{-- <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li> --}}
                            {{-- <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li> --}}
                            {{-- <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li> --}}
                        </ul>
                    </div>
                </div>

                <!--Column-->
                <div class="column col-lg-3 col-md-6">
                    {{-- <div class="widget newsletter-widget">
                        <h3 class="widget-title">Newsletter Signup</h3>
                        <div class="widget-content">
                            <div class="text">Enter your email address to get latest <br> updates and offers from us.</div>
                            <div class="newsletter-form">
                                <form class="ajax-sub-form" method="post">
                                    <div class="form-group">
                                        <input type="email" placeholder="Email Address..." id="subscription-email">
                                        <button type="submit" class="theme-btn"><i class="flaticon-long-right-arrow"></i><span></span></button>
                                        <label class="subscription-label" for="subscription-email"></label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> --}}
                </div>

                <!--Column-->
                <div class="column col-lg-3 col-md-6">
                    <div class="widget links-widget">
                        <h3 class="widget-title">Cursos</h3>
                        <div class="widget-content">
                            <ul>
                                <li><a href="#">Aprenda a conducir paso a paso</a></li>
                                <li><a href="#">Curso de conducción en carretera</a></li>
                                <li><a href="#">Lecciones en carro automático</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!--Column-->
                <div class="column col-lg-3 col-md-6">
                    <div class="widget contact-widget">
                        <h3 class="widget-title">Contáctenos</h3>
                        <div class="widget-content">
                            <ul class="contact-info">
                                <li>
                                    <div class="icon"><span class="fas fa-flag"></span></div>
                                    <div class="text">Paso Ancho, San José</div>
                                </li>
                                <li>
                                    <div class="icon"><span class="fas fa-phone-volume"></span></div>
                                    <div class="text"><a href="tel:+50670400506">7040-0506</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><span class="fas fa-clock"></span></div>
                                    <div class="text">Horario flexible</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="wrapper-box">
                <div class="copyright">
                    <div class="text">&copy; {{date('Y')}} Auto-Escuela Líder.</div>
                </div>
                {{-- <div class="footer-menu">
                    <ul>
                        <li><a href="#">Sitemap </a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                    </ul>
                </div> --}}
            </div>
        </div>
    </div>

</footer>
