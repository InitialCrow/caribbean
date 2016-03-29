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
</head>

<body>
<header id="header">
    <div class="bar-top"></div>
    <div class="wrapper">
        <h1 class="nav-logo"><img src="{{url('assets/images/logo.png')}}" alt=""/></h1>
        @include('partials.nav')
    </div>
</header>

<section id="main-content" class="wrapper">
    @yield('content')
</section>

{{--<footer id="footer">--}}
    {{--<p>Copyright © ...</p>--}}
    {{--<ul>--}}
        {{--<li>Facebook</li>--}}
        {{--<li>Twitter</li>--}}
        {{--<li>Instagram</li>--}}
    {{--</ul>--}}
{{--</footer>--}}

<script src="{{url('js/lib/jquery.min.js')}}"></script>
<script src="{{url('js/lib/clipboard.min.js')}}"></script>
<script src="{{url('js/lib/slider/swiper.min.js')}}"></script>
<script src="{{url('js/lib/gallery/lightbox.js')}}"></script>
<script src="{{url('js/lib/jquery.countdown.js')}}"></script>
<script src="{{url('js/main.js')}}"></script>

</body>
</html>