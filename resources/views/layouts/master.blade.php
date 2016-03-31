<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/slider/swiper.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/gallery/lightbox.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/font-awesome.min.css')}}">
</head>

<body>
<header id="header" class="navbar navbar-fixed-top">
    <div class="bar-top"></div>
    <div class="wrapper">
        <h1 class="nav-logo"><img src="{{url('assets/images/logo.png')}}" alt=""/></h1>
        @include('partials.nav')
    </div>
</header>

<section id="main-content" class="wrapper">
    @yield('content')
</section>

<div class="clearfix"></div>
<footer id="footer">
    <section class="wrapper">
        <div class="left">
            <p class="futuraStd-Light">caribbean planner - 2016</p>
        </div>
        <div class="right">
            <p class="didotLTStd-Bold">Nous suivre</p>
            <ul>
                <li class="facebook"><a href=""><i class="fa fa-facebook"></i></a></li>
                <li class="google"><a href=""><i class="fa fa-google-plus"></i></a></li>
                <li class="instagram"><a href=""><i class="fa fa-instagram"></i></a></li>
                <li class="pinterest"><a href=""><i class="fa fa-pinterest-p"></i></a></li>
            </ul>
        </div>
    </section>
</footer>

<script src="{{url('js/lib/jquery.min.js')}}"></script>
<script src="{{url('js/lib/clipboard.min.js')}}"></script>
<script src="{{url('js/lib/slider/swiper.min.js')}}"></script>
<script src="{{url('js/lib/gallery/lightbox.js')}}"></script>
<script src="{{url('js/lib/jquery.countdown.js')}}"></script>
<script src="{{url('js/main.js')}}"></script>
<script src="{{url('js/lib/jquery.magnific-popup.js')}}"></script>


</body>
</html>