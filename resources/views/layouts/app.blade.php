<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Auto-escuela Líder</title>
<!-- Stylesheets -->
<link href="{{ asset('css/bootstrap.css')}}" rel="stylesheet">
<link href="{{ asset('css/style.css')}}" rel="stylesheet">
<!-- Responsive File -->
<link href="{{ asset('css/responsive.css')}}" rel="stylesheet">
<!-- Color File -->
<link href="{{ asset('css/color.css')}}" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<link rel="shortcut icon" href="{{ asset('images/favicon.png')}}" type="image/x-icon">
<link rel="icon" href="{{ asset('images/favicon.png')}}" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js')}}"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js')}}"></script><![endif]-->
</head>



<body>

<div class="page-wrapper">
    <!--<div class="loader-wrap">
        <div class="preloader"></div>
        <div class="layer layer-one"><span class="overlay"></span></div>
        <div class="layer layer-two"><span class="overlay"></span></div>
        <div class="layer layer-three"><span class="overlay"></span></div>
    </div>-->

    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-right-arrow-4"></span></div>

<script src="{{ asset('js/jquery.js')}}"></script>
<script src="{{ asset('js/popper.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/bootstrap-select.min.js')}}"></script>
<script src="{{ asset('js/jquery.fancybox.js')}}"></script>
<script src="{{ asset('js/isotope.js')}}"></script>
<script src="{{ asset('js/owl.js')}}"></script>
<script src="{{ asset('js/appear.js')}}"></script>
<script src="{{ asset('js/wow.js')}}"></script>
<script src="{{ asset('js/lazyload.js')}}"></script>
<script src="{{ asset('js/scrollbar.js')}}"></script>
<script src="{{ asset('js/TweenMax.min.js')}}"></script>
<script src="{{ asset('js/swiper.min.js')}}"></script>
<script src="{{ asset('js/jquery.polyglot.language.switcher.js')}}"></script>
<script src="{{ asset('js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{ asset('js/parallax-scroll.js')}}"></script>

<script src="{{ asset('js/script.js')}}"></script>

</body>
</html>
