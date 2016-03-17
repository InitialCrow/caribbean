<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
</head>

<body>
<header id="header">
    <div class="wrapper">
        <h1>Logo</h1>
        @include('partials.nav')
    </div>
</header>

<section id="main-content">
    @yield('content')
</section>

<footer id="footer">
    <p>Copyright © ...</p>
    <ul>
        <li>Facebook</li>
        <li>Twitter</li>
        <li>Instagram</li>
    </ul>
</footer>

@yield('scripts')
</body>
</html>